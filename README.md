# Deprecated: 

Important Note: Endpoints are now included with the Contact Form 7 plugin as of version 4.7. I only recommend working with this code if you are using an older version of Contact Form 7.

Here's the changelog: https://contactform7.com/2017/03/03/contact-form-7-47/
Here's the code: https://github.com/ohze/wp-contact-form-7/blob/master/includes/rest-api.php

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
