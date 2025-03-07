# Project Content Breakdown

This README provides an overview of the contents and structure of the PHP files used in this project.

## Overview
This project includes PHP scripts that handle navigation, form processing, database interactions, and content rendering.

## File Breakdown

### gaming.php
Contains content related to gaming interests.

### home.php
Serves as the homepage, including an image slider, feature highlights, and course promotions.

### index-5.php
Handles main routing and layout structure.

### movies.php
Displays a list of favorite movies and integrates database queries to retrieve and display contact information.

### navigation.php
Includes navigation logic, managing the inclusion of different pages based on user input.

### query_contacts.php
Contains SQL queries for retrieving and displaying contact information from a database.

### results.php & results-6.php
Handles the display of certain results, and user submissions or database queries.

### functions-2.php
May include additional helper functions (not yet detected in analysis).

### contact (1).php & contact-5.php
Handles contact form submissions and user inquiries.

### education.php
Displays educational background, class schedules, and instructor information.

### functions.php
Defines utility functions:
- **db_connect(\$db)**: Connects to the database using `webuser` credentials on `localhost`.
- **redirect(\$uri)**: Redirects users to a specified page using JavaScript and terminates script execution.

### career.php
Contains career-related content and aspirations.

### sign-up-form section
Handles user registration via a form:
- Validates user inputs such as name, email, phone, username, password, and comments.
- Uses `test_input()` to sanitize inputs.
- Stores valid form data in the `contact_info` table via `db_connect("contact_data")`.
- Displays validation errors and submission status messages.

### Additional Sections
- **Feature Section**: Showcases trending courses, books, and certified teachers.
- **About Section**: Provides an overview of the learning journey and includes a signup form.
- **Team Section**: Displays profiles of instructors and their expertise.
- **Courses Section**: Lists available courses along with pricing and instructor details.
- **Testimonial Section**: Features student reviews and ratings.
- **Contact Section**: Includes a form for user inquiries and a contact image.

---


