# ShootProof Psuedo Api

Per the ShootProof test, this is a mock api. It is built in Lumen MVC.

### Docker

The app was used built using docker, which means it should run on any environment. To use docker, please do `docker-compose up`.

### Database

All the database related information (tables, indexes, foriegns, etc) can be found in `images/php/app/database/migrations`

### Model

The models are the logic used to interface witht he database. They are found in `images/php/app/app/`. They are Album, Gallery, Photo, and the other model files.

### Restful API

The restful routes for the API can be found in `images/php/app/routes/web.php`. The routes are caught by controllers in `images/php/app/app/http/Controllers/`.


