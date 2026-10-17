/**
 * main.js
 *
 * Handles the mobile menu toggle, submenu expand/collapse on small
 * screens, and a sticky header on scroll.
 */
(function () {
      'use strict';

      var toggle = document.querySelector('.menu-toggle');
      var menu = document.querySelector('.blog-space-menu');
      var header = document.querySelector('.blog-space-header');

      /**
       * Toggle the mobile menu open/closed.
       */
      if (toggle && menu) {
            toggle.addEventListener('click', function () {
                  var isOpen = menu.classList.toggle('active');
                  toggle.setAttribute('aria-expanded', isOpen);
                  document.body.classList.toggle('bs-menu-open', isOpen);
            });
      }

      /**
      * On small screens, tapping a parent menu item expands its
      * submenu instead of following the link straight away.
      */
      if (menu) {
            var parentItems = menu.querySelectorAll('.menu-item-has-children > a');

            parentItems.forEach(function (link) {
                  link.addEventListener('click', function (event) {
                        if (window.innerWidth >= 768) {
                              return;
                        }

                        var parentItem = link.parentElement;
                        var submenu = parentItem.querySelector('.sub-menu');

                        if (submenu) {
                              event.preventDefault();
                              parentItem.classList.toggle('menu-item--open');
                              submenu.classList.toggle('sub-menu--open');
                        }
                  });
            });
      }

      /**
      * Add a class to the header once the page has scrolled past it,
      * so it can be styled as a sticky/fixed header via CSS.
      */
      if (header) {
            window.addEventListener('scroll', function () {
                  if (window.scrollY >= 67) {
                        header.classList.add('is-sticky');
                  } else {
                        header.classList.remove('is-sticky');
                  }
            });
      }
})();