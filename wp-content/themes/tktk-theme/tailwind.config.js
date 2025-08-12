module.exports = {
  mode: 'jit',
  content: ['./views/*.twig', './views/**/*.twig', './svg/**/*.twig'],
  safelist: [
    // Margin utilities
    'm-0', 'mt-0', 'mb-0', 'ml-0', 'mr-0', 'mx-0', 'my-0',
    'm-1', 'mt-1', 'mb-1', 'ml-1', 'mr-1', 'mx-1', 'my-1',
    'm-2', 'mt-2', 'mb-2', 'ml-2', 'mr-2', 'mx-2', 'my-2',
    'm-3', 'mt-3', 'mb-3', 'ml-3', 'mr-3', 'mx-3', 'my-3',
    'm-4', 'mt-4', 'mb-4', 'ml-4', 'mr-4', 'mx-4', 'my-4',
    'm-5', 'mt-5', 'mb-5', 'ml-5', 'mr-5', 'mx-5', 'my-5',
    'm-6', 'mt-6', 'mb-6', 'ml-6', 'mr-6', 'mx-6', 'my-6',
    // Padding utilities
    'p-0', 'pt-0', 'pb-0', 'pl-0', 'pr-0', 'px-0', 'py-0',
    'p-1', 'pt-1', 'pb-1', 'pl-1', 'pr-1', 'px-1', 'py-1',
    'p-2', 'pt-2', 'pb-2', 'pl-2', 'pr-2', 'px-2', 'py-2',
    'p-3', 'pt-3', 'pb-3', 'pl-3', 'pr-3', 'px-3', 'py-3',
    'p-4', 'pt-4', 'pb-4', 'pl-4', 'pr-4', 'px-4', 'py-4',
    'p-5', 'pt-5', 'pb-5', 'pl-5', 'pr-5', 'px-5', 'py-5',
    'p-6', 'pt-6', 'pb-6', 'pl-6', 'pr-6', 'px-6', 'py-6',
    // Other
    'h-100', 'h-75', 'mt-auto'
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
