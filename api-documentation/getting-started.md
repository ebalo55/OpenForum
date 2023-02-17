# Getting started

### API base endpoint

The API base endpoint is the root of all API calls in our system and is accessible through the URL path `/api/`. All API calls except the cross-site request forgery token will be made through this endpoint.

The API base endpoint provides a foundation for accessing the functionality of our system through programmable means. Our system's API is designed to allow for easy integration with other systems and applications and is built to be simple to use while providing powerful capabilities.

### Cross-Site Request Forgery (CSRF)

The Cross-Site Request Forgery (CSRF) is a security feature implemented in the API to protect against malicious attacks. It works by generating a unique token for each session, which is then checked for each `POST`, `PUT` or `DELETE` request to verify that it comes from a legitimate user and not an attacker. The CSRF token is not included in the base endpoint and must be requested before each `POST`, `PUT` or `DELETE` request.

The API endpoint for the CSRF token is `/sanctum/csrf-cookie`. This endpoint returns a cookie that is used to verify the user's authenticity when submitting a form or making an API call. Once the CSRF cookie is received, it must be included in the headers of any subsequent `POST`, `PUT` or `DELETE` request.

It's important to note that the CSRF token must be requested before each `POST`, `PUT` or `DELETE` request, as the token is invalidated once it's used. This means that if the user navigates away from the page or if the token expires, a new CSRF token must be requested.

By requiring the CSRF token, the API can protect against malicious attacks that try to trick users into submitting forms or making API calls without their knowledge. This security measure helps ensure that only legitimate users are able to access and modify the data within the system.

{% swagger method="get" path="/sanctum/csrf-cookie" baseUrl="http(s)://[host]" summary="Summary" expanded="false" %}
{% swagger-description %}
Obtain a valid CSRF cookie.
{% endswagger-description %}

{% swagger-response status="204: No Content" description="Empty response with XSRF-TOKEN cookie set" %}
```http
Set-Cookie: XSRF-TOKEN=[CSRF cookie value]; expires=[date]; Max-Age=7200; path=/; samesite=lax
```
{% endswagger-response %}
{% endswagger %}
