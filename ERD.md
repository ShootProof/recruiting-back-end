# Entity Relationship Diagram for ShootProof

Below is a fairly straight forward data model describing the relationships in the proposed system.

![ERD](ShootProof_ERD.png)

As mentioned in the diagram, this pre-supposes a RDBMS such as MySQL or SQLite, but would be flexible to many other systems.

## Entities

### Users

> The `Users` entity contains relevant information about a user and stores their encrypted password hash for authentication purposes.

### Galleries

> The `Galleries` entity contains relevant information about a `User`'s galleries and has a foreign key constraint back to the `Users` table. This should also provide some flexibility in allowing users to have more than one `Gallery` if they wished.

### Albums

> The `Albums` entity contains relevant information about a given `Album` and has a foreign key back to the `Galleries` table. This should provide the flexibility for a `User` to have 0 or many `Albums` within a given `Gallery`

### Photos

> The `Photos` entity contains relevant information about a given `Photo` and contain's a `file_path` that can point to the location where the actual image is warehoused. This could be a local path or an external path such as a CDN.

### AlbumPhotos

> The `AlbumPhotos` join table keeps track of which `Photos` are in which `Albums`. It has a foriegn key going back to both entities. This allows a user to place a `Photo` inside of many `Albums`.
