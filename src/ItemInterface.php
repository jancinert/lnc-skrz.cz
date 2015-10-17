<?php

    namespace LNC\SkrzCZ;

    interface ItemInterface {

        public function getId();

        /**
         * @return array
         */
        public function getCities();

        public function getTitleShort();

        public function getTitle();

        public function getUrl();

        /**
         * @return array
         */
        public function getImages();

        public function getFinalPrice();

        public function getOriginalPrice();

        public function getCurrency();

        public function getCustomers();

        public function getMinCustomers();

        public function getMaxCustomers();

        public function getDealStart();

        public function getDealEnd();

        public function getVoucherStart();

        public function getVoucherEnd();

        public function getCategory();

        /**
         * @return array
         */
        public function getTags();

        public function getProviderTitle();

        public function getProviderAddress();

        public function getProviderGPSLat();

        public function getProviderGPSLng();

        public function getProviderWeb();

        /**
         * @return array
         */
        public function getProviderEmail();

        /**
         * @return array
         */
        public function getProviderPhone();

        public function getAdult();

        /**
         * @return ItemVariantInterface[]
         */
        public function getVariants();

        public function getLanguage();

    }
