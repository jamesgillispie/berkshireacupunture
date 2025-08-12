<?php
/**
 * Plugin Name: Lorem Post Generator
 * Description: Quickly generate lorem ipsum placeholder posts/pages for testing.
 * Version:     1.0.0
 * Author:      You
 */

if ( ! defined( 'ABSPATH' ) ) exit;

class Lorem_Post_Generator {
    const META_FLAG = '_lorem_generated';
    const NONCE     = 'lpg_nonce';

    public function __construct() {
        add_action( 'admin_menu', [ $this, 'menu' ] );
    }

    public function menu() {
        add_management_page(
            'Generate Lorem Posts',
            'Generate Lorem Posts',
            'manage_options',
            'lorem-post-generator',
            [ $this, 'screen' ]
        );
    }

    public function screen() {
        if ( isset( $_POST['lpg_action'] ) && check_admin_referer( self::NONCE ) ) {
            if ( $_POST['lpg_action'] === 'generate' ) {
                $this->handle_generate();
            } elseif ( $_POST['lpg_action'] === 'delete' ) {
                $this->handle_delete();
            }
        }

        $post_types = get_post_types( ['public' => true], 'objects' );
        ?>
        <div class="wrap">
            <h1>Generate Lorem Posts</h1>

            <h2 class="title">Create</h2>
            <form method="post">
                <?php wp_nonce_field( self::NONCE ); ?>
                <input type="hidden" name="lpg_action" value="generate" />
                <table class="form-table" role="presentation">
                    <tr>
                        <th scope="row"><label for="lpg_count">How many?</label></th>
                        <td><input name="lpg_count" id="lpg_count" type="number" min="1" step="1" value="10" class="small-text" /></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="lpg_type">Post type</label></th>
                        <td>
                            <select name="lpg_type" id="lpg_type">
                                <?php foreach ( $post_types as $type ) : ?>
                                    <option value="<?php echo esc_attr( $type->name ); ?>"><?php echo esc_html( $type->labels->singular_name ); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="lpg_paras">Paragraphs per post</label></th>
                        <td><input name="lpg_paras" id="lpg_paras" type="number" min="1" step="1" value="3" class="small-text" /></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="lpg_status">Status</label></th>
                        <td>
                            <select name="lpg_status" id="lpg_status">
                                <option value="draft">Draft</option>
                                <option value="publish">Publish</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="lpg_title_prefix">Title prefix</label></th>
                        <td><input name="lpg_title_prefix" id="lpg_title_prefix" type="text" value="Lorem Post" class="regular-text" /></td>
                    </tr>
                </table>
                <?php submit_button( 'Generate' ); ?>
            </form>

            <h2 class="title" style="margin-top:2rem;">Delete generated posts</h2>
            <p>This removes any posts previously created by this plugin (any post type).</p>
            <form method="post" onsubmit="return confirm('Delete all lorem posts created by this plugin?');">
                <?php wp_nonce_field( self::NONCE ); ?>
                <input type="hidden" name="lpg_action" value="delete" />
                <?php submit_button( 'Delete Lorem Posts', 'delete' ); ?>
            </form>
        </div>
        <?php
    }

    private function handle_generate() {
        $count   = max( 1, intval( $_POST['lpg_count'] ?? 10 ) );
        $type    = sanitize_key( $_POST['lpg_type'] ?? 'post' );
        $paras   = max( 1, intval( $_POST['lpg_paras'] ?? 3 ) );
        $status  = $_POST['lpg_status'] === 'publish' ? 'publish' : 'draft';
        $prefix  = sanitize_text_field( $_POST['lpg_title_prefix'] ?? 'Lorem Post' );

        $created = 0;
        for ( $i = 1; $i <= $count; $i++ ) {
            $title = sprintf( '%s %d', $prefix, $this->random_number() );
            $content = $this->lorem_paragraphs( $paras );

            $post_id = wp_insert_post( [
                'post_type'   => $type,
                'post_status' => $status,
                'post_title'  => $title,
                'post_content'=> $content,
            ], true );

            if ( ! is_wp_error( $post_id ) ) {
                add_post_meta( $post_id, self::META_FLAG, 1, true );
                $created++;
            }
        }

        printf( '<div class="notice notice-success"><p>Created %d %s.</p></div>',
            $created,
            $created === 1 ? 'post' : 'posts'
        );
    }

    private function handle_delete() {
        $q = new WP_Query( [
            'post_type'      => 'any',
            'posts_per_page' => -1,
            'meta_key'       => self::META_FLAG,
            'meta_value'     => 1,
            'fields'         => 'ids',
            'post_status'    => 'any',
        ] );

        $deleted = 0;
        foreach ( $q->posts as $post_id ) {
            if ( wp_delete_post( $post_id, true ) ) {
                $deleted++;
            }
        }

        printf( '<div class="notice notice-warning"><p>Deleted %d %s.</p></div>',
            $deleted,
            $deleted === 1 ? 'post' : 'posts'
        );
    }

    private function lorem_paragraphs( $count = 3 ) : string {
        $para = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae velit non purus porta ultricies. Integer laoreet, nisl ut bibendum gravida, nisl nunc interdum purus, ut finibus risus arcu non mi. ';
        $out = '';
        for ( $i = 0; $i < $count; $i++ ) {
            $sentences = rand( 3, 6 );
            $p = '';
            for ( $s = 0; $s < $sentences; $s++ ) {
                $p .= $this->mutate_sentence( $para );
            }
            $out .= '<p>' . trim( $p ) . '</p>' . "\n";
        }
        return $out;
    }

    private function mutate_sentence( $base ) : string {
        // Light randomization so posts aren’t identical.
        $fragments = [
            'Curabitur at faucibus turpis. ',
            'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; ',
            'Sed dignissim dui nec volutpat aliquam. ',
            'Aenean vel lacus nec arcu cursus laoreet. ',
            'Nullam sollicitudin justo eu justo pharetra, a posuere mi euismod. ',
            'Donec vitae libero orci. ',
        ];
        $extra = $fragments[ array_rand( $fragments ) ];
        return ( rand(0,1) ? $base : $extra );
    }

    private function random_number() : int {
        return wp_rand( 1000, 9999 );
    }
}
new Lorem_Post_Generator();