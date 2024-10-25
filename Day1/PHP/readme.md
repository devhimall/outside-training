# PHP Web Application: User Greeting and Age Analysis

## Problem Statement

You are tasked with creating a simple PHP web application that allows users to submit their name, age, and favorite color via a form. After submission, the application should:

- Display a personalized greeting that includes the user's name.
- Check if the user is an adult or a minor based on their age, and display an appropriate message.
- Use a switch statement to display a message based on their favorite color:
  - If the favorite color is "red", display "Red is a bold choice!".
  - If the favorite color is "blue", display "Blue is calming.".
  - If the favorite color is "green", display "Green represents nature.".
  - For any other color, display "That's an interesting choice!".
- Use a loop to display a list of numbers from 1 to the user's age, indicating how many years they have lived.

## Requirements

1. **HTML Form**: Create an HTML form to collect the user’s name, age, and favorite color.
2. **PHP Script**: Write a PHP script to process the form submission and implement the above logic.
3. **Input Validation**: Ensure proper validation of inputs (e.g., age must be a number, name and color cannot be empty).
4. **Sanitization**: Sanitize all user inputs to prevent XSS attacks.

## Example Input

- **Name**: Alice
- **Age**: 25
- **Favorite Color**: Blue

## Expected Output
    Hello, Alice!
    You are an adult.
    Blue is calming.
    Here is a list of the years you have lived:
    1
    2
    3
    4
    5
    ...
    25

## Actual Output Screenshots

![Alt text](/Day1/assets/php1.png)
![Alt text](/Day1/assets/php2.png)
![Alt text](/Day1/assets/php3.png)
