/**
 * @file
 * Provides admin utilities.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Blazy admin utility functions.
   *
   * @param {int} i
   *   The index of the current element.
   * @param {HTMLElement} form
   *   The Blazy form wrapper HTML element.
   */
  function blazyForm(i, form) {
    var t = $(form);

    $('.details-legend-prefix', t).removeClass('element-invisible');

    t[$('.form-checkbox--vanilla', t).prop('checked') ? 'addClass' : 'removeClass']('form--vanilla-on');

    t.on('click', '.form-checkbox', function () {
      var $input = $(this);
      $input[$input.prop('checked') ? 'addClass' : 'removeClass']('on');

      if ($input.hasClass('form-checkbox--vanilla')) {
        t[$input.prop('checked') ? 'addClass' : 'removeClass']('form--vanilla-on');
      }
    });

    $('select[name$="[style]"]', t).on('change', function () {
      var $select = $(this);

      t.removeClass(function (index, css) {
        return (css.match(/(^|\s)form--style-\S+/g) || []).join(' ');
      });

      if ($select.val() === '') {
        t.addClass('form--style-off');
      }
      else {
        t.addClass('form--style-on form--style-' + $select.val());
      }
    }).change();

    $('select[name$="[grid]"]', t).on('change', function () {
      var $select = $(this);

      t[$select.val() === '' ? 'removeClass' : 'addClass']('form--grid-on');
    }).change();

    $('select[name$="[responsive_image_style]"]', t).on('change', function () {
      var $select = $(this);
      t[$select.val() === '' ? 'removeClass' : 'addClass']('form--responsive-image-on');
    }).change();

    $('select[name$="[media_switch]"]', t).on('change', function () {
      var $select = $(this);

      t.removeClass(function (index, css) {
        return (css.match(/(^|\s)form--media-switch-\S+/g) || []).join(' ');
      });

      t[$select.val() === '' ? 'removeClass' : 'addClass']('form--media-switch-' + $select.val());
    }).change();

    t.on('mouseenter touchstart', '.hint', function () {
      $(this).closest('.form-item').addClass('is-hovered');
    });

    t.on('mouseleave touchend', '.hint', function () {
      $(this).closest('.form-item').removeClass('is-hovered');
    });

    t.on('click', '.hint', function () {
      $('.form-item.is-selected', t).removeClass('is-selected');
      $(this).parent().toggleClass('is-selected');
    });

    t.on('click', '.description', function () {
      $(this).closest('.is-selected').removeClass('is-selected');
    });

    t.on('focus', '.js-expandable', function () {
      $(this).parent().addClass('is-focused');
    });

    t.on('blur', '.js-expandable', function () {
      $(this).parent().removeClass('is-focused');
    });
  }

  /**
   * Blazy admin tooltip function.
   *
   * @param {int} i
   *   The index of the current element.
   * @param {HTMLElement} elm
   *   The Blazy form item description HTML element.
   */
  function blazyTooltip(i, elm) {
    var $tip = $(elm);

    if (!$tip.siblings('.hint').length) {
      $tip.closest('.form-item').append('<span class="hint">?</span>');
    }
  }

  /**
   * Blazy admin checkbox function.
   *
   * @param {int} i
   *   The index of the current element.
   * @param {HTMLElement} elm
   *   The Blazy form item checkbox HTML element.
   */
  function blazyCheckbox(i, elm) {
    var $elm = $(elm);
    if (!$elm.next('.field-suffix').length) {
      $elm.after('<span class="field-suffix"></span>');
    }
  }

  /**
   * Attaches Blazy form behavior to HTML element.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.blazyAdmin = {
    attach: function (context) {
      var $form = $('.form--slick', context);

      $('.description', $form).once('blazy-tooltip').each(blazyTooltip);
      $('.form-checkbox', $form).once('blazy-checkbox').each(blazyCheckbox);

      $form.once('blazy-admin').each(blazyForm);
    }
  };

})(jQuery, Drupal);
;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, window) {
  function TableResponsive(table) {
    this.table = table;
    this.$table = $(table);
    this.showText = Drupal.t('Show all columns');
    this.hideText = Drupal.t('Hide lower priority columns');

    this.$headers = this.$table.find('th');

    this.$link = $('<button type="button" class="link tableresponsive-toggle"></button>').attr('title', Drupal.t('Show table cells that were hidden to make the table fit within a small screen.')).on('click', $.proxy(this, 'eventhandlerToggleColumns'));

    this.$table.before($('<div class="tableresponsive-toggle-columns"></div>').append(this.$link));

    $(window).on('resize.tableresponsive', $.proxy(this, 'eventhandlerEvaluateColumnVisibility')).trigger('resize.tableresponsive');
  }

  Drupal.behaviors.tableResponsive = {
    attach: function attach(context, settings) {
      var $tables = $(context).find('table.responsive-enabled').once('tableresponsive');
      if ($tables.length) {
        var il = $tables.length;
        for (var i = 0; i < il; i++) {
          TableResponsive.tables.push(new TableResponsive($tables[i]));
        }
      }
    }
  };

  $.extend(TableResponsive, {
    tables: []
  });

  $.extend(TableResponsive.prototype, {
    eventhandlerEvaluateColumnVisibility: function eventhandlerEvaluateColumnVisibility(e) {
      var pegged = parseInt(this.$link.data('pegged'), 10);
      var hiddenLength = this.$headers.filter('.priority-medium:hidden, .priority-low:hidden').length;

      if (hiddenLength > 0) {
        this.$link.show().text(this.showText);
      }

      if (!pegged && hiddenLength === 0) {
        this.$link.hide().text(this.hideText);
      }
    },
    eventhandlerToggleColumns: function eventhandlerToggleColumns(e) {
      e.preventDefault();
      var self = this;
      var $hiddenHeaders = this.$headers.filter('.priority-medium:hidden, .priority-low:hidden');
      this.$revealedCells = this.$revealedCells || $();

      if ($hiddenHeaders.length > 0) {
        $hiddenHeaders.each(function (index, element) {
          var $header = $(this);
          var position = $header.prevAll('th').length;
          self.$table.find('tbody tr').each(function () {
            var $cells = $(this).find('td').eq(position);
            $cells.show();

            self.$revealedCells = $().add(self.$revealedCells).add($cells);
          });
          $header.show();

          self.$revealedCells = $().add(self.$revealedCells).add($header);
        });
        this.$link.text(this.hideText).data('pegged', 1);
      } else {
          this.$revealedCells.hide();

          this.$revealedCells.each(function (index, element) {
            var $cell = $(this);
            var properties = $cell.attr('style').split(';');
            var newProps = [];

            var match = /^display\s*:\s*none$/;
            for (var i = 0; i < properties.length; i++) {
              var prop = properties[i];
              prop.trim();

              var isDisplayNone = match.exec(prop);
              if (isDisplayNone) {
                continue;
              }
              newProps.push(prop);
            }

            $cell.attr('style', newProps.join(';'));
          });
          this.$link.text(this.showText).data('pegged', 0);

          $(window).trigger('resize.tableresponsive');
        }
    }
  });

  Drupal.TableResponsive = TableResponsive;
})(jQuery, Drupal, window);;