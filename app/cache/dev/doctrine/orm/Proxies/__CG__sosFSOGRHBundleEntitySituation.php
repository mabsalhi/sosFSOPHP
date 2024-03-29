<?php

namespace Proxies\__CG__\sosFSO\GRHBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Situation extends \sosFSO\GRHBundle\Entity\Situation implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setEchelon($echelon)
    {
        $this->__load();
        return parent::setEchelon($echelon);
    }

    public function getEchelon()
    {
        $this->__load();
        return parent::getEchelon();
    }

    public function setNumeroIndicatif($numeroIndicatif)
    {
        $this->__load();
        return parent::setNumeroIndicatif($numeroIndicatif);
    }

    public function getNumeroIndicatif()
    {
        $this->__load();
        return parent::getNumeroIndicatif();
    }

    public function setDateEffet($dateEffet)
    {
        $this->__load();
        return parent::setDateEffet($dateEffet);
    }

    public function getDateEffet()
    {
        $this->__load();
        return parent::getDateEffet();
    }

    public function setSalaireEstimatif($salaireEstimatif)
    {
        $this->__load();
        return parent::setSalaireEstimatif($salaireEstimatif);
    }

    public function getSalaireEstimatif()
    {
        $this->__load();
        return parent::getSalaireEstimatif();
    }

    public function setRemarques($remarques)
    {
        $this->__load();
        return parent::setRemarques($remarques);
    }

    public function getRemarques()
    {
        $this->__load();
        return parent::getRemarques();
    }

    public function setCadres(\sosFSO\GRHBundle\Entity\Cadre $cadres = NULL)
    {
        $this->__load();
        return parent::setCadres($cadres);
    }

    public function getCadres()
    {
        $this->__load();
        return parent::getCadres();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'echelon', 'numeroIndicatif', 'dateEffet', 'salaireEstimatif', 'remarques', 'cadres');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}