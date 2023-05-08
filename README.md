# CodeIgniter Project Setup Automated Script

This script automates the setup process for a CodeIgniter project by cloning the project from GitHub, installing dependencies with Composer, creating a MySQL database, and importing an SQL file. 

## Requirements

- Bash shell (Linux, macOS)
- Git client
- PHP (with Composer)
- MySQL client

## Installation

1. Download the `setup.sh` file from this repository.
2. Open a terminal and navigate to the directory where the `setup.sh` file is located.
3. Make the `setup.sh` file executable by running the following command: `chmod +x setup.sh`

## Usage

1. Open a terminal and navigate to the directory where the `setup.sh` file is located.
2. Run the `setup.sh` script by running the following command: `./setup.sh`
3. Follow the prompts to enter the MySQL database details (database name, username, password, and host).
4. Wait for the script to complete the setup process.

## Notes

- If the MySQL client is not installed on your system, the script will prompt you to install it before continuing.
- The script will clone the project from the following public GitHub repository: `git@github.com:alokvermaei2007/ci4.git`
- The `database.sql` file should be located in the same directory as the `setup.sh` file.
- After the script completes the setup process, you can access the CodeIgniter project by opening a web browser and navigating to the project's URL.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

## Acknowledgments


Feel free to modify this README file to suit your specific project requirements.
