# Contacts Notebook Project

This project is a simple application for managing contacts stored in a database named "contacts." The application utilizes PHP for server-side logic and MySQL to store contact information.

## File Structure

The project is organized into three main files:

1. **archivo1.php**: Query interface allowing users to search for a contact by their alias and displaying a list of all contacts with basic information.

2. **archivo2.php**: Receives the alias sent from `archivo1.php`, performs a database query, and saves relevant data in a session. It then redirects to the next file.

3. **archivo3.php**: Receives session data, stores it in variables, and presents detailed information about a contact in a card format.

## Requirements

- Web server supporting PHP and MySQL (e.g., XAMPP, WampServer, or any other).

## Configuration

1. Import the SQL script `DB.sql` into your database to create the necessary table.

2. Configure the database connection in the `conexion.php` file by providing the appropriate information (database name, username, password).

## Usage

1. Open `archivo1.php` in your web browser.

2. Enter the alias of the contact you want to query.

3. Select a contact from the list or perform a search.

4. The application will redirect you to the `archivo3.php` page, displaying detailed information about the selected contact.

## Navigation and Security

The application uses sessions to securely maintain user information during navigation. Additionally, a clear navigation logic has been implemented between the files for an intuitive user experience.

## Contributions

Feel free to contribute to the project through pull requests. If you encounter any issues or have suggestions, please open an issue.

## Author

Anyel EC
