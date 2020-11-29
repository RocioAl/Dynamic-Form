
particlesJS('particles-js', {
  particles: {
    color: '#676B6C',
    shape: 'circle', 
    opacity: 1,
    size: 1.3,
    size_random: true,
    nb: 100,
    line_linked: {
      enable_auto: true,
      distance: 100,
      color: '#676B6C',
      opacity: 1,
      width: 1,
      condensed_mode: {
        enable: false,
        rotateX: 600,
        rotateY: 600
      }
    },
    anim: {
      enable: true,
      speed: 3
    }
  },
  interactivity: {
    enable: true,
    mouse: {
      distance: 250
    },
    detect_on: 'canvas',
    mode: 'grab',
    line_linked: {
      opacity: .5
    },
    events: {
      onclick: {
        enable: true,
        mode: 'push', 
        nb: 2
      }
    } 
  },

  retina_detect: true
});