# Catlations

An early-internet-inspired website where cats bring you revelations in the form of random quotes.

Example Available through tor network at: http://cats3rpl4vwzqldlpawwxoyssskx7daw5hk3ew7swtkyspy352qignqd.onion/

## Features

- Table-based layout with a classic MS Windows 95 teal background (#008080).
- Custom cat cursor.
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

### Installation Instructions

#### Debian/Ubuntu
```bash
sudo apt update
sudo apt install php-cli python3 fortune-mod
```

#### Arch Linux
```bash
sudo pacman -Syu
sudo pacman -S php python fortune-mod
```

#### macOS (using Homebrew)
```bash
brew install php python fortune
```

## Running Locally

To run the local server, execute the following command from the root directory of the project:

```bash
php -S localhost:8000 -t www
```

Then open http://localhost:8000 in your browser.
