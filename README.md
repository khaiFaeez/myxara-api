# Myxara API

> Version 1.0.0

Myxara API

## Path Table

| Method | Path                                                            | Description |
| ------ | --------------------------------------------------------------- | ----------- |
| POST   | [/api/auth/token](#postapiauthtoken)                            |             |
| POST   | [/api/auth/checkId](#postapiauthcheckid)                        |             |
| POST   | [/api/register](#postapiregister)                               |             |
| GET    | [/api/auth/user](#getapiauthuser)                               |             |
| HEAD   | [/api/auth/user](#headapiauthuser)                              |             |
| GET    | [/api/user/invoices](#getapiuserinvoices)                       |             |
| HEAD   | [/api/user/invoices](#headapiuserinvoices)                      |             |
| GET    | [/api/user/invoices/{invoiceNo}](#getapiuserinvoicesinvoiceno)  |             |
| HEAD   | [/api/user/invoices/{invoiceNo}](#headapiuserinvoicesinvoiceno) |             |
| DELETE | [/api/auth/token/delete](#deleteapiauthtokendelete)             |             |

## Reference Table

| Name | Path | Description |
| ---- | ---- | ----------- |

## Path Details

---

### [POST]/api/auth/token

#### RequestBody

-   application/json

```ts
{
}
```

#### Responses

-   200 Successful operation

`application/json`

```ts
{
}
```

-   400 Bad Request

`application/json`

```ts
{
}
```

-   401 Unauthorized

`application/json`

```ts
{
}
```

-   403 Forbidden

`application/json`

```ts
{
}
```

-   404 Not Found

`application/json`

```ts
{
}
```

-   422 Unprocessable Entity

`application/json`

```ts
{
}
```

-   500 Internal Server Error

`application/json`

```ts
{
}
```

-   default Unexpected error

`application/json`

```ts
{
}
```

---

### [POST]/api/auth/checkId

#### RequestBody

-   application/json

```ts
{
}
```

#### Responses

-   200 Successful operation

`application/json`

```ts
{
}
```

-   400 Bad Request

`application/json`

```ts
{
}
```

-   401 Unauthorized

`application/json`

```ts
{
}
```

-   403 Forbidden

`application/json`

```ts
{
}
```

-   404 Not Found

`application/json`

```ts
{
}
```

-   422 Unprocessable Entity

`application/json`

```ts
{
}
```

-   500 Internal Server Error

`application/json`

```ts
{
}
```

-   default Unexpected error

`application/json`

```ts
{
}
```

---

### [POST]/api/register

#### RequestBody

-   application/json

```ts
{
  ic?: string
  email?: string
  password: {
  }
  name: {
  }
}
```

#### Responses

-   200 Successful operation

`application/json`

```ts
{
}
```

-   400 Bad Request

`application/json`

```ts
{
}
```

-   401 Unauthorized

`application/json`

```ts
{
}
```

-   403 Forbidden

`application/json`

```ts
{
}
```

-   404 Not Found

`application/json`

```ts
{
}
```

-   422 Unprocessable Entity

`application/json`

```ts
{
}
```

-   500 Internal Server Error

`application/json`

```ts
{
}
```

-   default Unexpected error

`application/json`

```ts
{
}
```

---

### [GET]/api/auth/user

#### Responses

-   200 Successful operation

`application/json`

```ts
{
}
```

-   400 Bad Request

`application/json`

```ts
{
}
```

-   401 Unauthorized

`application/json`

```ts
{
}
```

-   403 Forbidden

`application/json`

```ts
{
}
```

-   404 Not Found

`application/json`

```ts
{
}
```

-   422 Unprocessable Entity

`application/json`

```ts
{
}
```

-   500 Internal Server Error

`application/json`

```ts
{
}
```

-   default Unexpected error

`application/json`

```ts
{
}
```

---

### [HEAD]/api/auth/user

#### Responses

-   200 Successful operation

`application/json`

```ts
{
}
```

-   400 Bad Request

`application/json`

```ts
{
}
```

-   401 Unauthorized

`application/json`

```ts
{
}
```

-   403 Forbidden

`application/json`

```ts
{
}
```

-   404 Not Found

`application/json`

```ts
{
}
```

-   422 Unprocessable Entity

`application/json`

```ts
{
}
```

-   500 Internal Server Error

`application/json`

```ts
{
}
```

-   default Unexpected error

`application/json`

```ts
{
}
```

---

### [GET]/api/user/invoices

#### Responses

-   200 Successful operation

`application/json`

```ts
{
}
```

-   400 Bad Request

`application/json`

```ts
{
}
```

-   401 Unauthorized

`application/json`

```ts
{
}
```

-   403 Forbidden

`application/json`

```ts
{
}
```

-   404 Not Found

`application/json`

```ts
{
}
```

-   422 Unprocessable Entity

`application/json`

```ts
{
}
```

-   500 Internal Server Error

`application/json`

```ts
{
}
```

-   default Unexpected error

`application/json`

```ts
{
}
```

---

### [HEAD]/api/user/invoices

#### Responses

-   200 Successful operation

`application/json`

```ts
{
}
```

-   400 Bad Request

`application/json`

```ts
{
}
```

-   401 Unauthorized

`application/json`

```ts
{
}
```

-   403 Forbidden

`application/json`

```ts
{
}
```

-   404 Not Found

`application/json`

```ts
{
}
```

-   422 Unprocessable Entity

`application/json`

```ts
{
}
```

-   500 Internal Server Error

`application/json`

```ts
{
}
```

-   default Unexpected error

`application/json`

```ts
{
}
```

---

### [GET]/api/user/invoices/{invoiceNo}

#### Parameters(Query)

```ts
invoiceNo: string;
```

#### Responses

-   200 Successful operation

`application/json`

```ts
{
}
```

-   400 Bad Request

`application/json`

```ts
{
}
```

-   401 Unauthorized

`application/json`

```ts
{
}
```

-   403 Forbidden

`application/json`

```ts
{
}
```

-   404 Not Found

`application/json`

```ts
{
}
```

-   422 Unprocessable Entity

`application/json`

```ts
{
}
```

-   500 Internal Server Error

`application/json`

```ts
{
}
```

-   default Unexpected error

`application/json`

```ts
{
}
```

---

### [HEAD]/api/user/invoices/{invoiceNo}

#### Parameters(Query)

```ts
invoiceNo: string;
```

#### Responses

-   200 Successful operation

`application/json`

```ts
{
}
```

-   400 Bad Request

`application/json`

```ts
{
}
```

-   401 Unauthorized

`application/json`

```ts
{
}
```

-   403 Forbidden

`application/json`

```ts
{
}
```

-   404 Not Found

`application/json`

```ts
{
}
```

-   422 Unprocessable Entity

`application/json`

```ts
{
}
```

-   500 Internal Server Error

`application/json`

```ts
{
}
```

-   default Unexpected error

`application/json`

```ts
{
}
```

---

### [DELETE]/api/auth/token/delete

#### RequestBody

-   application/json

```ts
{
}
```

#### Responses

-   200 Successful operation

`application/json`

```ts
{
}
```

-   400 Bad Request

`application/json`

```ts
{
}
```

-   401 Unauthorized

`application/json`

```ts
{
}
```

-   403 Forbidden

`application/json`

```ts
{
}
```

-   404 Not Found

`application/json`

```ts
{
}
```

-   422 Unprocessable Entity

`application/json`

```ts
{
}
```

-   500 Internal Server Error

`application/json`

```ts
{
}
```

-   default Unexpected error

`application/json`

```ts
{
}
```

## References
