create table if not exists users (
    id integer primary key,
    first_name varchar(255) not null,
    last_name varchar(255) not null,
    email varchar(255) not null,
    password_hash varchar(255) not null
);

create table if not exists galleries (
    id integer primary key,
    user_id integer not null,
    last_name varchar(255) not null,
    email varchar(255) not null,
    password_hash varchar(255) not null,
    foreign key(user_id) references users(id)
);

create table if not exists albums (
    id integer primary key,
    gallery_id integer not null,
    title varchar(255),
    description varchar(255),
    foreign key(gallery_id) references gallery(id)
);

create table if not exists photos (
    id integer primary key,
    title varchar(255),
    description varchar(255)
);

create table if not exists album_photos (
    album_id integer,
    photo_id integer,
    foreign key(album_id) references albums(id),
    foreign key(photo_id) references photos(id)
);