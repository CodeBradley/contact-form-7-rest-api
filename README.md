# Deprecated: 
The REST API endpoints are now integrated directly into the Contact Form 7 plugin. Please see https://github.com/ohze/wp-contact-form-7/blob/master/includes/rest-api.php

---
# Contact Form 7 REST API Endpoints
Contact Form 7 endpoints for the WP REST API v2

**Get All Forms:**
```
GET /wp-json/wpcf7/v1/forms
```

**Get Single Form:**
```
GET /wp-json/wpcf7/v1/forms/(?P<id>[\d]+)
```

**Create Form:**
```
POST /wp-json/wpcf7/v1/forms
```

**Update Form:**
```
PUT /wp-json/wpcf7/v1/forms/(?P<id>[\d]+)
PATCH /wp-json/wpcf7/v1/forms/(?P<id>[\d]+)
```

**Delete Form:**
```php
TODO
```
