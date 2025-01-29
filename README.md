# HNG12 Stage 0 Task - Public API

This is a simple backend API developed for the HNG12 Stage 0 Task. The API returns the following details in JSON format:

- **Registered email address**: The email address used to register on the HNG12 Slack workspace.
- **Current date and time**: A dynamically generated timestamp in ISO 8601 format (UTC).
- **GitHub repository URL**: The public URL of this project's codebase.

## Technology Stack

- **Programming Language**: PHP

---

## API Specification

### Endpoint
- **Method**: GET
- **URL**: `<Your API Deployment URL>`

### Response Format: JSON
```json
{
  "email": "nurudeen.jola@gmail.com",
  "current_datetime": "2025-01-30T09:30:00Z",
  "github_url": "https://github.com/imjolayemi/HNG_stage_0"
}
```

---

## Setup Instructions

### Prerequisites
- Ensure you have **PHP** installed (version 8.2+).

### Installation
1. **Clone the repository**:
   ```bash
   git clone https://github.com/imjolayemi/HNG_stage_0.git
   cd HNG_stage_0
   ```
2. **Run the application**:
   - Start a PHP development server:
     ```bash
     php -S 0.0.0.0:8000 index.php
     ```
   - The API should now be accessible at:
     ```
     http://localhost:8000
     ```

---

## Deployment

The API is deployed and publicly accessible at:
- `<Your Deployment URL>`

---

## CORS Handling

The API is configured to handle Cross-Origin Resource Sharing (CORS) properly by setting the appropriate headers in the PHP code:
```php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
```

---

## Useful Links

- PHP Developers:  https://hng.tech/hire/php-developers
- Python Developers: https://hng.tech/hire/python-developers
- Node.js Developers: https://hng.tech/hire/nodejs-developers
- Java Developers: https://hng.tech/hire/java-developers
- Golang Developers: https://hng.tech/hire/golang-developers
- C# Developers: https://hng.tech/hire/csharp-developers

---

## Author

**Jolayemi**

- **GitHub**: [imjolayemi](https://github.com/imjolayemi)
