/**
 * category-list.js  —  PSA OpenSTAT
 * Expand / collapse subcategory panels.
 * No dependencies. Drop in before </body>.
 */

/** Called by the +/− button's onclick. Prevents link navigation. */
function clToggle(event, btn) {
  event.preventDefault();
  event.stopPropagation();
  btn.closest('.cl-item').classList.toggle('is-open');
}

/** Called by the card's onclick when it has subcategories.
 *  Clicking the card body (not the button) also toggles the panel. */
function clCardClick(event, anchor) {
  if (event.target.closest('.cl-expand-btn')) return false; // let button handle it
  anchor.closest('.cl-item').classList.toggle('is-open');
  return false;
}