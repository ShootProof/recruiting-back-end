# API Spec

## Users

**List out users on the system.**

Returns a JSON response containing an Array of Users.

```
[GET] /users
```

> ```
> Response
> [
>     {
>         "id": "5ebde1da",
>         "first_name": "Joshua",
>         "last_name": "Sandlin",
>         "email": "joshua.sandlin@gmail.com"
>     }
> ]
> ```

**Show details of a single user**

Returns a JSON response containing an object representing a User.

```
[GET] /users/:user_id
```

> ```
> Response
> {
>     "id": "5ebde1da",
>     "first_name": "Joshua",
>     "last_name": "Sandlin",
>     "email": "joshua.sandlin@gmail.com"
> }
> ```

**Add a new user into the system.**

Accepts a JSON object containing information about a new User

```
[POST] /users
```

> ```
> Request
> {
>     "first_name": "Joshua",
>     "last_name": "Sandlin",
>     "email": "joshua.sandlin@gmail.com"
>     "password": "changeme"
> }
> ```

> ```
> Response
> {
>     "id": "5ebde1da",
> }
> ```

* Update an existing user

```
[PUT] /users/:user_id
```

> ```
> Request
> {
>     "first_name": "Josh"
> }
> ```

> ```
> Response
> {
>     "id": "5ebde1da",
> }
> ```

* Delete a user from the system

```
[DELETE] /users/:user_id
```

> ```
> HTTP 202
> ```

## Galleries

* List out galleries in the sytem. (could also be purposed to show the galleries for a given user with a Session ID)

```
[GET] /galleries
```

* List out gallery details for a given gallery

```
[GET] /galleries/:gallery_id
```

* Add a new gallery into the system. (could also be purposed to add a gallery to a specific user with a Session ID)

```
[POST] /galleries
```

* Update a given gallery

```
[PUT] /galleries/:gallery_id
```

* Delete a gallery from the system.

```
[DELETE] /galleries/:gallery_id
```

## Albums

* Show albums for a given gallery

```
[GET] /galleries/:gallery_id/albums
```

* Get details for a given album

```
[GET] /galleries/:gallery_id/albums/:album_id
```

* Create a new album within a given gallery

```
[POST] /galleries/:gallery_id/albums
```

* Update details of a given album

```
[PUT] /galleries/:gallery_id/albums/:album_id
```

* Delete a given album from a gallery

```
[DELETE] /galleries/:gallery_id/albums/:album_id
```

## Photos

* Get information about an image in an album

```
[GET] /galleries/:gallery_id/albums/:album_id/photos/:photo_id
```

* Add a new image to a given album

```
[POST] /galleries/:gallery_id/albums/:album_id/photos
```

* Remove a photo from a given album

```
[DELETE] /galleries/:gallery_id/albums/:album_id/photos/:photo_id
```
