<?php

    namespace LNC\SkrzCZ;

    class Writer {

        protected $outputFilepath;
        /**
         * @var \XmlWriter;
         */
        protected $xmlWriter;
        protected $inited = false;

        public function setOutputFilepath( $v ) {
            $this->outputFilepath = $v;
        }

        public function addItem( ItemInterface $item ) {

            $this->init();

            $writer = $this->xmlWriter;

            $writer->startElement( 'DEAL' );
            $this->map(
                 'ID',
                 $item->getId()
            );

            $_cities = $item->getCities();
            if( $_cities ) {
                $writer->startElement( 'CITIES' );
                foreach( $_cities as $_iterItem ) {
                    $this->map(
                         'CITY',
                         $_iterItem
                    );
                }
                $writer->endElement();
            }
            $this->map(
                 'TITLE_SHORT',
                 $item->getTitleShort()
            );
            $this->map(
                 'TITLE',
                 $item->getTitle()
            );
            $this->map(
                 'URL',
                 $item->getUrl()
            );

            $_images = $item->getImages();
            if( $_images ) {
                $writer->startElement( 'IMAGES' );
                foreach( $_images as $_iterItem ) {
                    $this->map(
                         'IMAGE',
                         $_iterItem
                    );
                }
                $writer->endElement();
            }
            $this->map(
                 'FINAL_PRICE',
                 $item->getFinalPrice()
            );
            $this->map(
                 'ORIGINAL_PRICE',
                 $item->getOriginalPrice()
            );
            $this->map(
                 'LANGUAGE',
                 $item->getLanguage()
            );
            $this->map(
                 'CURRENCY',
                 $item->getCurrency()
            );
            $this->map(
                 'CUSTOMERS',
                 $item->getCustomers()
            );
            $this->map(
                 'MIN_CUSTOMERS',
                 $item->getMinCustomers()
            );
            $this->map(
                 'MAX_CUSTOMERS',
                 $item->getMaxCustomers()
            );
            $this->map(
                 'DEAL_START',
                 $item->getDealStart()
            );
            $this->map(
                 'DEAL_END',
                 $item->getDealEnd()
            );
            $this->map(
                 'VOUCHER_START',
                 $item->getVoucherStart()
            );
            $this->map(
                 'VOUCHER_END',
                 $item->getVoucherEnd()
            );
            $this->map(
                 'CATEGORY',
                 $item->getCategory()
            );

            $_tags = $item->getTags();
            if( $_tags ) {
                $writer->startElement( 'TAGS' );
                foreach( $item->getTags() as $_iterItem ) {
                    $this->map(
                         'TAG',
                         $_iterItem
                    );
                }
                $writer->endElement();
            }

            $writer->startElement( 'PROVIDER' );
            $this->map(
                 'PROVIDER_TITLE',
                 $item->getProviderTitle()
            );
            $this->map(
                 'PROVIDER_ADDRESS',
                 $item->getProviderAddress()
            );
            $this->map(
                 'PROVIDER_GPS_LAT',
                 $item->getProviderGPSLat()
            );
            $this->map(
                 'PROVIDER_GPS_LNG',
                 $item->getProviderGPSLng()
            );
            $this->map(
                 'PROVIDER_WEB',
                 $item->getProviderWeb()
            );
            foreach( $item->getProviderEmail() as $_iterItem ) {
                $this->map(
                     'PROVIDER_EMAIL',
                     $_iterItem
                );
            }
            foreach( $item->getProviderPhone() as $_iterItem ) {
                $this->map(
                     'PROVIDER_PHONE',
                     $_iterItem
                );
            }
            $writer->endElement();

            $this->map(
                 'ADULT',
                 $item->getAdult()
            );

            $_variants = $item->getVariants();
            if( $_variants ) {
                $writer->startElement( 'VARIANTS' );
                foreach( $_variants as $_iterItem ) {
                    $writer->startElement( 'VARIANT' );
                    $this->map(
                         'ID',
                         $_iterItem->getId()
                    );
                    $this->map(
                         'TITLE',
                         $_iterItem->getTitle()
                    );
                    $this->map(
                         'URL',
                         $_iterItem->getUrl()
                    );
                    $this->map(
                         'FINAL_PRICE',
                         $_iterItem->getFinalPrice()
                    );
                    $this->map(
                         'ORIGINAL_PRICE',
                         $_iterItem->getOriginalPrice()
                    );
                    $this->map(
                         'MAX_CUSTOMERS',
                         $_iterItem->getMaxCustomers()
                    );
                    $writer->endElement();
                }

                $writer->endElement();
            }

            $writer->endElement();

            $writer->flush();

        }

        public function finish() {
            $writer = $this->xmlWriter;
            $writer->endElement();
            $writer->endDocument();
            $writer->flush();
        }

        protected function map( $nodeName, $value ) {
            if( $value === null ) {
                return;
            }

            $this->xmlWriter->writeElement(
                            $nodeName,
                            $value
            );
        }

        protected function init() {
            if( !$this->inited ) {

                if( !$this->outputFilepath ) {
                    throw new \Exception( 'outputFilepath option is not valid' );
                }

                $writer = new \XmlWriter();
                $writer->openUri( 'file://' . rawurlencode( $this->outputFilepath ) );
                $writer->setIndent( true );
                $writer->startDocument(
                       '1.0',
                       'utf-8'
                );
                $writer->startElement( 'SERVER' );
                $this->xmlWriter = $writer;

                $this->inited = true;
            }
        }

    }