## PHP Code / Namespaces:

### Repositories
* UserRepository
* GalleryRepository
* AlbumRepository
* PhotoRepository

### Models
* User
* Gallery
* Album
* Photo

### Capabilities?

* User:
    - `find_by_email`
    - `check_auth`
    - `#galleries`
    - `#albums`
    - `#photos`
* Gallery:
    - `find_by_user_id`
    - `create`
    - `update`
    - `delete`
    - `show`
    - `#albums`
* Album:
    - `find_by_user_id`
    - `find_by_gallery_id` (might be redundant?)
    - `create`
    - `update`
    - `delete`
    - `show`
    - `#photos`
* Photo
    - `find_by_album_id` (proxied through join)
    - `find_by_user_id` (proxied through join)
    - `find_by_gallery_id` (proxied through join)
    - `create`
    - `delete`
    - `update`
    - `show`