<?php

namespace App\Observers;

use \TCG\Voyager\Models\Post;
use Laravel\Scout\Searchable;

class PostObserver
{
   
    /**
     * Handle to the post "created" event.
     *
     * @param  \App\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        /*
        $client = new \AlgoliaSearch\Client('X6QEDZPSSV','c593d8da38e2ae02bbd69c118ab01fc1');
        $index = $client->initIndex('posts');
        $index->addObject($post);
        */
    }

    /**
     * Handle the post "updated" event.
     *
     * @param  \App\Post  $post
     * @return void
     */
    public function updated(Post $post)
    {
        
        //$post->update();
    }

    /**
     * Handle the post "deleted" event.
     *
     * @param  \App\Post  $post
     * @return void
     */
    
    public function deleted(Post $post)
    {   
        /*
        $client = new \AlgoliaSearch\Client('X6QEDZPSSV','c593d8da38e2ae02bbd69c118ab01fc1');
        $index = $client->initIndex('posts');
        $index->deleteObject($post);
        */
    }
    
}
