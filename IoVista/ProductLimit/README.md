# Magento 2 Stand-Alone Extension: Create Product Limit in backend configuration

This Magento 2 extension allows you to create a new Handle Display attribute in admin.

## Features

- this will allow to Set the product limit in backend configuration so if we set the limit from backend and the handle disaply is yes so the product will be disaply as per limit 

## Installation

1. Copy the contents of this repository to the `app/code/IoVista/ProductLimit` directory of your Magento 2 installation.

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

1. Log in to the Magento Admin panel.

2. Navigate to `Stores > Configuration > General > Handle Product limit`.
please check with screenshot https://prnt.sc/dMxKFHcRNASI

3. Set the value like 1,2,5,10 so the  product will disaply on front end new page

4. Save the configuration.

## Usage

1. Log in to the customer account on the Magento storefront.

2. Navigate to the My Account section.

3. Click on the "Iovista New product page" link or menu item to access the custom frontend page.

4. On the chosen products page, you can view the list of products that you have added for handle display.

5. To add a product to the chosen products list, click on any product then the page will redirect to product page 


## Customization

If you want to customize the functionality or appearance of the chosen products page, you can modify the extension's code located in the `app/code/IoVista/ProductLimit` directory.
