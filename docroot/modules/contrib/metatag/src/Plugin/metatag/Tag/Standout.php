<?php
/**
 * @file
 * Contains \Drupal\metatag\Plugin\metatag\Tag\Standout.
 */

namespace Drupal\metatag\Plugin\metatag\Tag;

/**
 * The basic "Standout" meta tag.
 *
 * @MetatagTag(
 *   id = "standout",
 *   label = @Translation("Standout"),
 *   description = @Translation("Highlight standout journalism on the web, especially for breaking news; used as an indicator in <a href='google_news'>Google News</a>. Warning: Don't abuse it, to be used a maximum of 7 times per calendar week!", google_news="http://support.google.com/news/publisher/bin/answer.py?hl=en&answer=68297"),
 *   name = "standout",
 *   group = "advanced",
 *   weight = 3,
 *   image = FALSE,
 *   multiple = FALSE
 * )
 */
class Standout extends MetaNameBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}
