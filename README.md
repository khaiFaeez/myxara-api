## INSTALLATION

```

cp .env.example .env
```
Setup DB config in ENV

```
composer install

php artisan migrate

php artisan serve
```

Open POSTMAN start use following

# MYXARA

This is the OpenAPI specification for the MYXARA API.

## License

This project is licensed under the [Apache 2.0](https://www.apache.org/licenses/LICENSE-2.0.html) license.

## Base URL

The base URL for all API endpoints is `http://localhost:8000`.

## Endpoints

### /api/auth/token

#### POST /api/auth/token

Creates a new authentication token.

##### Responses

- 200: Successful operation
- 400: Bad Request
- 401: Unauthorized
- 403: Forbidden
- 404: Not Found
- 422: Unprocessable Entity
- 500: Internal Server Error
- Default: Unexpected error

### /api/register

#### POST /api/register

Registers a new user.

##### Responses

- 200: Successful operation
- 400: Bad Request
- 401: Unauthorized
- 403: Forbidden
- 404: Not Found
- 422: Unprocessable Entity
- 500: Internal Server Error
- Default: Unexpected error

##### Request Body

Request body parameters:

- userId (string, required)
- email (string, required)
- password (object, required)
- deviceId (object, required)
- name (object, optional)

### /api/auth/user

#### GET /api/auth/user

Gets the authenticated user.

##### Responses

- 200: Successful operation
- 400: Bad Request
- 401: Unauthorized
- 403: Forbidden
- 404: Not Found
- 422: Unprocessable Entity
- 500: Internal Server Error
- Default: Unexpected error

#### HEAD /api/auth/user

Checks if the user is authenticated.

##### Responses

- 200: Successful operation
- 400: Bad Request
- 401: Unauthorized
- 403: Forbidden
- 404: Not Found
- 422: Unprocessable Entity
- 500: Internal Server Error
- Default: Unexpected error

### /api/user/invoices

#### GET /api/user/invoices

Gets the user's invoices.

##### Responses

- 200: Successful operation
- 400: Bad Request
- 401: Unauthorized
- 403: Forbidden
- 404: Not Found
- 422: Unprocessable Entity
- 500: Internal Server Error
- Default: Unexpected error

#### HEAD /api/user/invoices

Checks if the user has any invoices.

##### Responses

- 200: Successful operation
- 400: Bad Request
- 401: Unauthorized
- 403: Forbidden
- 404: Not Found
- 422: Unprocessable Entity
- 500: Internal Server Error
- Default: Unexpected error

### /api/user/invoices/{invoiceNo}

#### GET /api/user/invoices/{invoiceNo}

Gets the details of a specific invoice.

##### Parameters

- invoiceNo (string, required) - The invoice number.

##### Responses

- 200: Successful operation
- 400: Bad Request
- 401: Unauthorized
- 403: Forbidden
- 404: Not Found
- 422: Unprocessable Entity
- 500: Internal Server Error
- Default: Unexpected error

#### HEAD /api/user/invoices/{invoiceNo}

Checks if a specific invoice exists.

##### Parameters

- invoiceNo (string, required) - The invoice number.

##### Responses

- 200: Successful operation
- 400: Bad Request
- 401: Unauthorized
- 403: Forbidden
- 404: Not Found
- 422: Unprocessable Entity
- 500: Internal Server Error
- Default: Unexpected error

### /api/auth/token/delete

#### DELETE /api/auth/token/delete

Deletes the current authentication token.

##### Responses

- 200: Successful operation
- 400: Bad Request
- 401: Unauthorized
- 403: Forbidden
- 404: Not Found
- 422: Unprocessable Entity
- 500: Internal Server Error
- Default: Unexpected error

##### Request Body

Request body parameters:

- None

