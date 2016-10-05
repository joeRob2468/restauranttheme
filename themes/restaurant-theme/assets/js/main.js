// we avoid anonymous functions using this method: https://learn.jquery.com/code-organization/beware-anonymous-functions/
var scripts =
{
  // ready function. convenient for running scripts. 
  onReady: function()
  {
    // initialize skrollr if we're not on mobile
    if($('.parallax') && !(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera))
    {
      var s = skrollr.init({
        forceHeight: false,
        smoothScrolling: false
      });
    }

    smoothScroll.init({
      selector: 'a', // Selector for links (must be a class, ID, data attribute, or element tag)
      selectorHeader: '[data-scroll-header]', // Selector for fixed headers (must be a valid CSS selector)
      speed: 750, // Integer. How fast to complete the scroll in milliseconds
      easing: 'easeInOutCubic', // Easing pattern to use
      offset: 50, // Integer. How far to offset the scrolling anchor location in pixels
      updateURL: true, // Boolean. If true, update the URL hash on scroll
      callback: function ( anchor, toggle ) {} // Function to run after scrolling
    });
  },
};

$(document).foundation();
// $(document).ready(scripts.onReady);