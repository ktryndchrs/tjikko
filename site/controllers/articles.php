<?php
/**
 * Controllers allow you to separate the logic of your templates from your markup.
 * This is especially useful for complex logic, but also in general to keep your templates clean.
 *
 * In this example, we handle tag filtering and paginating articles in the controller,
 * before we pass the currently active tag and the articles to the template.
 *
 * More about controllers:
 * https://getkirby.com/docs/guide/templates/controllers
 */
return function ($page) {

    $tag   = urldecode(param('tag'));
    /**
     * We use the collection helper to fetch the articles collection defined in `/site/collections/articles.php`
     * 
     * More about collections:
     * http://getkirby.test/docs/guide/templates/collections
     */
    $articles = collection('articles')->filter(function ($page) {
        return $page->content()->visibility()->toBool();
      });

    if (empty($tag) === false) {
        $articles = $articles->filterBy('tags', $tag, ',');
    }

    return [
        'tag'   => $tag,
        'articles' => $articles->paginate(6)
    ];

};
