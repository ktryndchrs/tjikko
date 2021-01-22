<?php
/* 
  KIRBY SETTINGS
*/
return [
  
  'debug' => true,

  'languages' => true,
  
  'panel' => [
    'install' => true,
    'css' => 'assets/css/panel.css'
  ],
  
  'markdown' => [
    'extra' => true
  ],
  
  // Hooks
  'hooks' => [
    // Markdown Hook for blank target
    'kirbytext:before' => function ($text) {
        $text = str_replace('target: blank', 'target: _blank', $text);
        return $text;
    },
  ],

  'myfuncts' => require_once __DIR__ . '/my_funct.php',
  
  // Buggy
  /*'hooks' => [
    #$text = $page->text();
    #$arr = json_decode($text);
    #throw new Exception( json_encode($arr[1]->type) );
    'file.changeName:after' => function ($newFile, $oldFile) {
      $page = $newFile->parent();      
      $text = $page->text();
      $newtext = str_replace( $oldFile->filename(), $newFile->filename(), $text );
      $newPage = $page->update([
        'text'        => $newtext,
      ]);
    },
    'file.replace:after' => function ($newFile, $oldFile) {
      $page = $newFile->parent();      
      $text = $page->text();
      $newtext = str_replace( $oldFile->filename(), $newFile->filename(), $text );
      $newPage = $page->update([
        'text' => $newtext,
      ]);
    },
    'file.create:after' => function ($file) {
      $newfile = $file->update([
        'template' => "image",
      ]);
    }
  ],*/

];
