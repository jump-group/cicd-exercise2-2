# CI/CD Exercise 2.2

This exercise aims to set up a GitHub Action to automate the build and deployment process of a website using a serverless approach.

## Description

The exercise involves creating a GitHub Action workflow that triggers on changes to the repository. Upon triggering, the workflow will perform the following steps:

1. **Build Process**: Compile and process the HTML, CSS, and other assets of the website.

2. **Deploy Process**: Use a serverless deployment method to publish the updated website to a hosting service.

## File Structure

The website consists of the following structure:

- `resources/`
  - `style.scss`: SCSS file for styling the website.
- `index.php`: PHP file for rendering the website.
- `server.php`: PHP file for handling local server requests.
- `public/`: Directory for storing the compiled website assets.
- `serverless.yml`: Serverless configuration file for deploying the website.

## GitHub Action Setup

The goal is to create a GitHub Action that:

- Automatically triggers on pushes to the repository's main branch.
- Uses appropriate actions for building the website.
- Uses serverless deployment methods to publish the website.

### Steps to Complete the Exercise

1. **Clone Repository**: Clone this repository to your local machine.

2. **Create Workflow**: Inside the repository, create a `.github/workflows` directory.

3. **Define Workflow**: Create a YAML file (e.g., `deploy.yml`) within the `workflows` directory. Define the workflow with necessary steps for building and deploying the website.

4. **Configure Action**: Ensure the action triggers on push events and includes the necessary build and deployment steps.

5. **Test Action**: Push changes to the repository to trigger the GitHub Action. Verify that the website is built and deployed correctly.

## Notes

- Ensure proper handling of sensitive information (e.g., API keys or secrets) in the deployment process.
- Test the action thoroughly to ensure the website is correctly built and deployed.

Happy Coding!
