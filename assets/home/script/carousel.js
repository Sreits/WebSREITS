//Options
const options = { loop: false }
const plugins = [EmblaCarouselAutoplay()] // Plugins
// Grab wrapper nodes
const rootNode = document.querySelector('.embla')
const viewportNode = rootNode.querySelector('.embla__viewport')

// Grab button nodes
//const prevButtonNode = rootNode.querySelector('.embla__prev')
//const nextButtonNode = rootNode.querySelector('.embla__next')

// Initialize the carousel
const embla = EmblaCarousel(viewportNode, options, plugins)

// Add click listeners
// prevButtonNode.addEventListener('click', embla.scrollPrev, false)
// nextButtonNode.addEventListener('click', embla.scrollNext, false)