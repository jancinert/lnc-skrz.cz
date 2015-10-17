<?php

    namespace LNC\SkrzCZ;

    interface ItemVariantInterface {

        public function getId();

        public function getTitle();

        public function getUrl();

        public function getFinalPrice();

        public function getOriginalPrice();

        public function getMaxCustomers();

    }