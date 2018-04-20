<?php

  class user {
    var $id;
    function get_id() {
      return $this->id;
    }
  }

  class photo {
    var $id;
    function get_id() {
      return $this->id;
    }

  }

  class item {
    var $id;
    var $title;
    var $comment;
    var $creation_ts;

    function get_id() {
      return $this->id;
    }
    function get_title() {
      return $this->title;
    }
    function set_title($new_title) {
      $this->title = $new_title;
    }
    function get_comment() {
      return $this->comment;
    }
    function set_comment($new_comment) {
      $this->comment = $new_comment;
    }
    function get_creation_ts() {
      return $this->creation_ts;
    }
  }

  class photo_collection {
    var $id;
    var $name;
    var $visiblity;
    var $state;
    var $creator_id;
    var $creation_ts;

    function get_id() {
      return $this->id;
    }
    function get_name() {
      return $this->name;
    }
    function set_name($new_name) {
      $this->name = $new_name;
    }

    function get_visiblity() {
      return $this->visibility;
    }
    function get_state() {
      return $this->state;
    }
    function get_creator_id() {
      return $this->creator_id;
    }
    function get_creation_ts() {
      return $this->creation_ts;
    }
  }

  class gallery extends photo_collection {
  }

  class gallery_item extends item {
  }

  class album extends photo_collection {
    var $album_items = array();

    function get_album_items() {
      return $this->album_items;
    }
    function set_album_item($new_item) {
      $this->album_items->addItem($new_item);
    }
  }

  class album_item {
    var $content_id;

    function set_content_id($new_content_id) {
      $this->$content_id = $new_content_id;
    }
    function get_content_id(){
      return $this->content_id;
    }

  }

 ?>
