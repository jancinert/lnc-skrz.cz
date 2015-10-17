<?php

    namespace LNC\SkrzCZ;

    class SimpleItem implements ItemInterface {

        protected $data;

        public function __get( $k ) {
            return isset( $this->data[$k] )
                    ? $this->data[$k]
                    : null;
        }

        public function __set( $k, $v ) {
            $this->data[$k] = $v;
        }

        public function getId() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        /**
         * @return array
         */
        public function getCities() {
            return $this->returnArray( __FUNCTION__ );
        }

        public function getTitleShort() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        public function getTitle() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        public function getUrl() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        /**
         * @return array
         */
        public function getImages() {
            return $this->returnArray( __FUNCTION__ );
        }

        public function getFinalPrice() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        public function getOriginalPrice() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        public function getCurrency() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        public function getCustomers() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        public function getMinCustomers() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        public function getMaxCustomers() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        public function getDealStart() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        public function getDealEnd() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        public function getVoucherStart() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        public function getVoucherEnd() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        public function getCategory() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        /**
         * @return array
         */
        public function getTags() {
            return $this->returnArray( __FUNCTION__ );
        }

        public function getProviderTitle() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        public function getProviderAddress() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        public function getProviderGPSLat() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        public function getProviderGPSLng() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        public function getProviderWeb() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        /**
         * @return array
         */
        public function getProviderEmail() {
            return $this->returnArray( __FUNCTION__ );
        }

        /**
         * @return array
         */
        public function getProviderPhone() {
            return $this->returnArray( __FUNCTION__ );
        }

        public function getAdult() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        /**
         * @return ItemVariantInterface[]
         */
        public function getVariants() {
            return $this->returnArray( __FUNCTION__ );
        }

        public function getLanguage() {
            return $this->{substr(
                            __FUNCTION__,
                            3
                    )};
        }

        protected function returnArray( $functionName ) {
            $v = $this->{substr(
                            $functionName,
                            3
                    )};
            if( !is_array( $v ) ) {
                return array();
            }

            return $v;
        }

    }
