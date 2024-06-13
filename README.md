# PHP MVC Application

This is a simple core PHP MVC (Model-View-Controller) application with URL mapping and MySQL database access.

## Getting Started

To run this application, follow these steps:

### Preconditions

- XAMPP installed on your system.

### Installation

1. Clone this repository into your XAMPP's `htdocs` folder:

   ```bash
   git clone https://github.com/danielkabok/php-mvc-app.git
   ```

   **OR**

   Download the repository as a ZIP file and extract it into the `htdocs` folder.

2. Start XAMPP and ensure both Apache and MySQL services are running.

3. Open your web browser and go to `http://localhost/phpmyadmin`.

4. Open the SQL tab and paste the contents of `database.sql` located in this repository.

5. Execute the SQL script to create the necessary tables and insert sample data.

### Usage
Once the database setup is complete, you can access the application at:

```
http://localhost/php-mvc-app/
```

This will take you to the index page of the application where you can navigate to view users and advertisements.