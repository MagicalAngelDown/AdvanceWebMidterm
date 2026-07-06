# AdvanceWebMidterm - Poke AI

## Project Overview

Poke AI is a multi-page PHP website that uses live data from the [PokéAPI](https://pokeapi.co/) to let users search for Pokémon, browse Pokémon by type, and view detailed Pokémon information. The goal of the project is to create a small API-driven web application that is useful, organized, and easy to understand.

I chose this topic because I enjoy Pokémon and trading card games. The long-term idea for the website is to grow it into a search tool that connects Pokémon characters with related cards and possibly expands into other card games such as Riftbound, Magic: The Gathering, and Yu-Gi-Oh.

## API Used

This project uses the PokéAPI:

- Website: https://pokeapi.co/
- Documentation: https://pokeapi.co/docs/v2
- Authentication: No API key required
- Data used: Pokémon names, images, height, weight, base experience, types, abilities, and stats

The website retrieves JSON data from PokéAPI using PHP, decodes the JSON response into an associative array, and displays selected information on the site.

## Major Features

- Home page introducing the purpose of Poke AI
- About page explaining the project idea, API choice, JSON usage, AI support, and personalization
- Pokémon search page where users can search for a Pokémon by name
- Default Pokémon listing when no search has been entered
- Details page that displays more information about a selected Pokémon
- Browse by type page that lets users view Pokémon from a selected type category
- Reusable PHP template files for the header, navigation bar, footer, and helper functions
- Bootstrap 5 layout for responsive design
- Custom CSS for Pokémon-themed colors, cards, buttons, background styling, and mobile layout
- Basic error handling for missing or invalid Pokémon searches

## How AI Helped

AI helped me break the project into smaller parts, understand how to retrieve and decode JSON data, troubleshoot PHP connection issues, improve page structure, and polish the Bootstrap layout, and see what my compleation rate for the project was. I still had to test the pages, adjust the code, make design choices, and make sure I understood how the site works.