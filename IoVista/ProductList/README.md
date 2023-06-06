# Magento 2 Stand-Alone Extension: Customer Products List

This Magento 2 extension allows you to create a new customer frontend page accessed from the My Account section, where customers can view a list of chosen products as per the Handle Display attribute.

## Features

- Add products to the chosen products list: Customers can see all the product if the handle disaply attribute is yes also i have added 1 configuration for product limit , so if product limit is 5 so the 5 product will be disaply on new page.
- View chosen products: Customers can view a list of their chosen products on the custom frontend page.

## Installation

1. Copy the contents of this repository to the `app/code/IoVista/ProductList` directory of your Magento 2 installation.

2. Run the following commands in the Magento root directory:

    ```bash
    bin/magento setup:upgrade
    bin/magento setup:di:compile
    bin/magento setup:static-content:deploy -f
    bin/magento indexer:reindex
    bin/magento cache:clean
    bin/magento cache:flush
    ```

## Configuration

1. This extension will show the item menu in left side my account section
please check with screenshot https://prnt.sc/aLkmel23sztX


## Usage

1. Log in to the customer account on the Magento storefront.

2. Navigate to the My Account section.

3. Click on the "Iovista New product page" link or menu item to access the custom frontend page.

4. On the chosen products page, you can view the list of products that you have added for handle display.

5. To add a product to the chosen products list, click on any product then the page will redirect to product page 

6. To remove a product from the chosen products list, simply Disable the handle display attribute
7. 
7. i have also added the slider as well please check 
with screenshot https://prnt.sc/IrF8DJxIOpRQ

## Customization

If you want to customize the functionality or appearance of the chosen products page, you can modify the extension's code located in the `app/code/IoVista/ProductList` directory.

## Testing

Unit tests are provided for this extension to ensure its reliability and functionality. You can run the tests using PHPUnit by executing the following command in the Magento root directory:

```bash
vendor/bin/phpunit -c dev/tests/unit/phpunit.xml.dist app/code/IoVista/ProductList/Test
