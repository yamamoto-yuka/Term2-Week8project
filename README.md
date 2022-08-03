# A local florist e-commerce site project

(11-Feb-2022 school project)

Demo site [here](https://jflower.yukayamamoto.me/).

![jflowerr](https://user-images.githubusercontent.com/84278263/182692169-a3a14dc7-42de-456b-be38-e0de39cd5ca6.gif)


## Skillset
- HTML5
- Sass
- PHP
- MySQL
- Photoshop



## Background
A local florist has reached out to you and wants to digitise their business. Accordingly, they want to list their floral spread on a website with the following features.


## Features
- Each product has
    - at least two images
    - A star rating
    - Price printed in bold and distinct letters
    - The occasion (the flowers belong to) clearly highlighted
    - Add to Cart button (Shopping cart is not part of this exercise)
- The listing is displayed according to occasions (e.g. Valentines day, birthday,
wedding, memorial etc)
- Ability for users to view products for a particular occasion
- Most of the customers are going to access the site on their phones or tablets

## What I did

### Database Design

### Data Structure
![datastructure](https://user-images.githubusercontent.com/84278263/182690921-7e5262a2-8796-422d-9d38-04f7ed6955a5.png)

### MySQL Stored Procedures
    1. Get all products
    2. Get products according to a specific occasion
    
![SP](https://user-images.githubusercontent.com/84278263/182687243-710afd1f-613e-4845-b3d0-26dfac463ce3.png)

### PHP
PHP does not process the query, retrieving the information using StoredProcedures instead.

### Carousel
Implemented carousel each product images using [Bootstrap carousel system](https://getbootstrap.com/docs/5.2/components/carousel/).

### A star rating
Executed For Loop for the number of times the specified rating number and displayed the stars.

### Filter
Using jQuery method, '.filter' and '.not' to set filter for occasions.

![jflower_filter](https://user-images.githubusercontent.com/84278263/182692227-c2d7e794-b20d-43d3-8e3d-f638bd4b7ee8.gif)

### Responsive design
Created Mobile, Tablets and Desktops design using Bootstrap grid system [Bootstrap grid system](https://getbootstrap.com/docs/5.0/layout/grid/).
