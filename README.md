# API Documentation

## Overview

The Bookstore REST API is a Laravel 11-based service that allows users to manage book data within the system. This API supports CRUD (Create, Read, Update, Delete) operations using standard HTTP methods: `POST`, `GET`, `PUT`, and `DELETE`.

## Technologies used

-   Laravel 11
-   MySQL
-   PHP 8+
-   Composer

## Installation

1. Clone the Repository :

```bash
git clone <repository_url>
```

2. Navigate to project directory :

```bash
cd project-BookStore
```

3. Install dependecies :

```bash
composer install
```

4. Configure `.env ` :

```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=bookstore
   DB_USERNAME=root
   DB_PASSWORD=
```

5. Run database migrations :

```bash
php artisan migrate
```

6. Start the local serve :

```bash
php artisan serve
```

## Allowed HTPP request

-   `GET` : to GET data from the API
-   `POST` : to send POST request to the API (Create Data)
-   `PUT` : to send PUT request to the API (Update Data)
-   `DELETE` : to DELETE data from API

## Description of Usual Server Response

-   200 `OK` : Request was successful
-   201 `Created` : The request succeeded, and a new resource was created as a result.
-   404 `Not found` : he server cannot find the requested resource. In the browser, this means the URL is not recognized.
-   422 `unproccessable content` : The request was well-formed but was unable to be followed due to semantic errors

## Book Attributes

-   _`id` : Unique identifier (Primary key)_
-   _`title` : Title of the Book_
-   _`author` : Name of Book Author_
-   _`description` : Description of the Book_
-   _`created_at` : The timestamp when the book was created_
-   _`updated_at` : The timestamp when the book was last updated_

## API Endpoints

### 1. Geting All Data

##### **Method** : `GET`

##### **Endpoint** :`/api/books`

#### **Response**:

```json
[
    {
        "id": 1,
        "title": "Laborum excepturi.",
        "author": "Shania Syahrini Suryatmi S.Pt",
        "description": "Perferendis rerum numquam sed voluptates ipsam voluptatem nam aut. Rerum tempora dolorem culpa qui. Quisquam qui ex est quos id sed ut. Placeat officia unde facilis tempora ipsum. In ut qui odit perspiciatis quis saepe odio. Voluptatem accusantium quae cumque voluptates autem. Qui id id quidem voluptas est cum. Nihil quaerat porro omnis inventore nihil voluptatibus dolor. Aut est fuga beatae sit. Necessitatibus odio reprehenderit cumque labore saepe quibusdam cum. Qui ut fugiat ex eum labore non sunt. Exercitationem sed sint eos. Reiciendis est quisquam rem at possimus sunt. Cum eligendi earum debitis voluptates odit. Et illum qui est quia nihil. Sit libero rerum quam sunt. Et accusantium voluptatem ut et neque. Quia veniam voluptatem iure qui. Eligendi quidem quas repellat. Modi sunt ut qui aut. Accusantium et ut doloremque perspiciatis et. In enim voluptas cum consectetur hic. Sunt pariatur est harum recusandae nobis.",
        "created_at": "2025-02-22T04:03:45.000000Z",
        "updated_at": "2025-02-22T04:03:45.000000Z"
    },
    {
        "id": 2,
        "title": "Omnis maxime.",
        "author": "Danu Hidayanto",
        "description": "Facere omnis aut ipsa non eum. Dolor vel maiores optio rerum ducimus. Ab fugit quisquam debitis ad labore. Expedita qui temporibus tempore sed voluptatem vel id necessitatibus. Dolores ab nisi dolores enim deserunt eum. Sit architecto dolorum cupiditate praesentium autem. Occaecati dignissimos doloribus nulla corrupti libero rerum quae. Nobis optio sit non nobis. Necessitatibus quam eum ut rerum incidunt. Magni cum praesentium sit deserunt non eum nobis. Hic cum et enim harum atque. Et et ratione aut laudantium. Et cupiditate libero sint aut quis fugit et. Rerum cumque et velit pariatur. Omnis officia quas maxime dolorem omnis atque tempora non. Quidem quasi nihil dolorum consequatur corporis veniam. Enim facere molestiae rem. Est ut enim aspernatur porro dolor ab ea est. Ullam voluptas ut dolorem rerum. Possimus eos aut possimus vitae dignissimos. Esse et quae et ab modi. Perferendis est repudiandae eum sequi hic consequatur provident. Officia rerum quae qui quibusdam hic dicta est.",
        "created_at": "2025-02-22T04:03:45.000000Z",
        "updated_at": "2025-02-22T04:03:45.000000Z"
    },
    {
        "id": 3,
        "title": "Modi aut.",
        "author": "Zelaya Nasyidah",
        "description": "Facilis architecto vero nihil quas minus. Quidem voluptatem facere vitae aperiam. Sint quia consequatur non exercitationem tenetur quo. Voluptas quaerat quia qui ullam. Sunt dolores unde consequatur consectetur. Accusantium iure sunt quis qui voluptate fugit culpa. Eum qui in sapiente fugiat sapiente explicabo. Rerum est magnam voluptas rem. Non quibusdam ea et repellat nihil consequatur. Quis voluptatem rerum repellat sunt id impedit ab. Commodi quia dolores libero corrupti. Laudantium magni animi dignissimos perferendis ea in vel. Dolorum ut id velit officia soluta repellendus. Cumque recusandae ipsam ipsa et aliquam rerum sint laboriosam. Et est enim sit officia. Quisquam nobis et ut eaque provident quis aut. Ratione sequi ullam voluptatum temporibus dolorem. Odio et molestias amet cum est itaque dolor. Hic et eum hic est in aut architecto. Asperiores rerum magni est vero debitis nostrum. Facilis rem est inventore doloremque non ea nostrum.",
        "created_at": "2025-02-22T04:03:45.000000Z",
        "updated_at": "2025-02-22T04:03:45.000000Z"
    }
]
```

### 2. Get Book Detail :

#### **Method** : `GET`

#### **Endpoint** :`/api/books/{id}`

#### **Response** :

```json
[
    {
        "id": 1,
        "title": "Laborum excepturi.",
        "author": "Shania Syahrini Suryatmi S.Pt",
        "description": "Perferendis rerum numquam sed voluptates ipsam voluptatem nam aut. Rerum tempora dolorem culpa qui. Quisquam qui ex est quos id sed ut. Placeat officia unde facilis tempora ipsum. In ut qui odit perspiciatis quis saepe odio. Voluptatem accusantium quae cumque voluptates autem. Qui id id quidem voluptas est cum. Nihil quaerat porro omnis inventore nihil voluptatibus dolor. Aut est fuga beatae sit. Necessitatibus odio reprehenderit cumque labore saepe quibusdam cum. Qui ut fugiat ex eum labore non sunt. Exercitationem sed sint eos. Reiciendis est quisquam rem at possimus sunt. Cum eligendi earum debitis voluptates odit. Et illum qui est quia nihil. Sit libero rerum quam sunt. Et accusantium voluptatem ut et neque. Quia veniam voluptatem iure qui. Eligendi quidem quas repellat. Modi sunt ut qui aut. Accusantium et ut doloremque perspiciatis et. In enim voluptas cum consectetur hic. Sunt pariatur est harum recusandae nobis.",
        "created_at": "2025-02-22T04:03:45.000000Z",
        "updated_at": "2025-02-22T04:03:45.000000Z"
    }
]
```

### 3. Add New Book

#### **Method** :`POST`

#### **Endpoint** :`/api/books`

#### **Request Body** :

```json
[
    {
        "title": "Demo",
        "author": "King_jamal",
        "description": "this is description of the book"
    }
]
```

#### **Respoonse** :

```json
{
    "message": "Book created successfully",
    "book": {
        "id": 4,
        "title": "Demo",
        "author": "King_jamal",
        "description": "this is description of the book"
    }
}
```

### 4. Update a Book

#### **Method** : `PUT`

#### **Endpoint** : `/api/books/{id}`

#### **Request Body** :

```json
[
    {
        "title": "Update title",
        "author": "update author",
        "description": "update description"
    }
]
```

#### **Response** :

```json
{
    "message": "Book updated successfully",
    "book": {
        "id": 4,
        "title": "update title",
        "author": "update author",
        "description": "update description",
        "created_at": "2025-02-22T04:04:45.000000Z",
        "updated_at": "2025-02-22T04:04:45.000000Z"
    }
}
```

### 5. Delete a Book :

#### **Method** : `DELETE`

#### **Endpoint** : `/api/books/{id}`

#### **Response** :

```json
{
    "message": "Book deleted successfuly"
}
```

## Contribution

If you would like to contribute to this project, please submit a pull request or open an issue in the repository.

---

**Note:** This documentation may be updated as the project evolves. Always refer to the main repository for the latest updates.
