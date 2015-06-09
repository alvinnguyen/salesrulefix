<?php
    class Wecode_SalesRuleFix_Model_Subselect extends Mage_SalesRule_Model_Rule_Condition_Product_Subselect{

        /**
         * validate
         *
         * @param Varien_Object $object Quote
         * @return boolean
         */
        public function validate(Varien_Object $object)
        {
            if (!$this->getConditions()) {
                return false;
            }

            $attr = $this->getAttribute();
            $total = 0;
            foreach ($object->getQuote()->getAllVisibleItems() as $item) {
                if (Mage_Rule_Model_Condition_Combine::validate($item)) {
                    $total += $item->getData($attr);
                }
            }

            return $this->validateAttribute($total);
        }
    }