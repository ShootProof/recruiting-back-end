# Back-end Coding Exercise


## Overview

Here at ShootProof, we prefer to have a good idea of a candidate's technical
experience before proceeding with portions of our recruiting process.  We
believe that the technical exercise below will illustrate a candidate's
approach to working with technologies commonly used here at ShootProof.


## Guidelines

The exercise consists of several different parts designed to showcase your
problem-solving and solution-implementation talents. There is not a single
correct answer; this is *not* an exam. We simply want to see how you approach a
business problem and the steps you take to solve it.

* This exercise should not take you more than two or three hours to complete. If
  your solution is taking longer, that's okay—be honest and let us know how long
  it took and why you think it took that long.
* Be as thorough as you wish.
* All exercises are to be performed as if you were on the job.
* You may submit your response in one of the following ways:
  * Package an archive (ZIP, tarball, etc.) of your files and deliver it to
    your contact.
    * If working with a recruiter, deliver it to them.
    * If working with ShootProof directly, deliver to <careers+dev@shootproof.com>.
  * Fork our repository and open a pull request.


## Exercise

Imagine that it's 2010, and ShootProof are starting to build our photo uploading
and processing functionality. This exercise walks you through what it might take
to design and build a very small portion of the ShootProof photo galleries
feature.


### Part 1: Data/domain modeling

**Goal:** define a data/domain model for photo galleries that contains albums
and photos.

Define a data model that:

* Allows a user to create a photo gallery.
* Allows the photo gallery to have photos uploaded into it.
* Allows the photo gallery to contain zero or more albums.
* Optionally allows a photo to be placed within one or more albums.

A complete submission will:

* Define all the relevant entities in the model.
* Illustrate the relationships and, optionally, behaviors among the entities.
* Describe the properties of each entity.
* Be documented in a manner you deem appropriate to accomplish the goal
  (entity-relationship diagram, UML, etc.).

**Extra credit:** Include data definition language (DDL) statements to create
tables for the data model.  Define the columns present in each table, along with
their data type and size.


### Part 2: Object-oriented programming

**Goal:** convert the data/domain model defined in Part 1 into working PHP
classes.

A complete submission will:

* Define all the relevant namespaces and classes as illustrated in your model.
* Include functionality to access and manipulate the data properties of each
  entity in the model.
* Expose the relationships among the entities through the use of code.
* Optionally, include code to illustrate any behaviors you've considered (this
  may be stubbed code).
* Optionally, include unit tests for these classes; if included, we should be
  able to run the tests to see them passing.

**Extra credit:** Show the use of a third-party dependency integrated and used
within your classes.

*Please note: Making database requests from these classes is not in the scope
of this exercise. Instead, focus on translating the domain into classes.*


### (Optional) Part 3: Hypermedia API design (REST)

**Goal:** design endpoints for a hypermedia API that will be used by API
consumers to create, read, update, and delete galleries, albums, and photos.

A complete submission will:

* Design JSON data structures for use in API requests and responses.
* Illustrate what each of your data/domain model entities would look like when
  returned from the API.
* Expose relationships among the entities through the use of hypermedia.
* Define all the operations that may be performed on each entity through the API
  and map HTTP methods to these operations.
* Show example HTTP requests and responses.
* Optionally, be documented in a manner you deem appropriate to accomplish the
  goal (OpenAPI, API Blueprint, Markdown, etc.).
* Optionally, describe the HTTP status codes that might be returned by each
  operation.
* Optionally, design API error responses that might occur for certain
  operations.
