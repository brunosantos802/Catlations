# Catlations

An early-internet-inspired website where cats bring you revelations in the form of random quotes.

## Features

- Table-based layout with a classic MS Windows 95 teal background (#008080).
- Custom cat cursor script.
- Dynamic random cat image selection via Python.
- Dynamic random quote generation via fortune-mod.

## Project Structure

- www/ - Web files
  - index.php - Main page structure, cursor logic, and script wrappers
  - image/ - Folder containing cat image files
  - cursor/ - Custom cursor graphic
  - favicon/ - Page favicon
- scripts/ - Backend helper scripts
  - rand_img.py - Python script that picks a random file name from www/image
  - get_quote.sh - Shell script that calls the system 'fortune' command

## Prerequisites

To run this website locally, you need:

1. PHP (with CLI support to run the built-in server)
2. Python 3
3. The 'fortune' or 'fortune-mod' utility installed on your operating system.

### Installing fortune

- Debian/Ubuntu: `sudo apt install fortune-mod`
- Arch Linux: `sudo pacman -S fortune-mod`
- macOS: `brew install fortune`

## Running Locally

To run the local server, execute the following command from the root directory of the project:

```bash
php -S localhost:8000 -t www
```

Then open http://localhost:8000 in your browser.
