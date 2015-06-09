# Sales Rule Fix for Magento
by Alvin Nguyen <alvin@alvinnguyen.net> - WeCode.com.au

### Features
* Resolving the following error when using condition in shopping cart price rules<br/>
`Fatal error: Maximum function nesting level of '100' reached, aborting! in ./lib/Varien/Object.php`

### Compatibility
* CE 1.9.1.0
* EE 1.14.1 - please apply this patch PATCH_SUPEE-4814_EE_1.14.1.0_v1.sh instead of this module

### Usage
* Using magento-composer-installer
  * add alvinnguyen/salesrulefix to required package
  * add this repository to reposity node
* Manual installation
  * clone/download the code and manually copy the files into their corresponding place

### Change log
* 1.0.0 (09 June 2015)
  * Initial Version
