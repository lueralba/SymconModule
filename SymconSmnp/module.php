<?
    // Klassendefinition
    class IPSWINSNMP extends IPSModule {
        public function __construct($InstanceID) {
            parent::__construct($InstanceID);
        }

        public function Create() {
            parent::Create();

            // Modul-Eigenschaftserstellung
            $this->RegisterPropertyString("SNMPIPAddress", "192.168.178.1"); 
            $this->RegisterPropertyInteger("SNMPPort", 161);
            $this->RegisterPropertyInteger("SNMPTimeout", 1);
            $this->RegisterPropertyString("SNMPVersion", "2c");

            $this->RegisterPropertyString("SNMPCommunity", "public"); 

            $this->RegisterPropertyString("SNMPSecurityName", "SomeName");
            //$this->RegisterPropertyString("SNMPAuthenticationProtocol", "SHA"); 
            //$this->RegisterPropertyString("SNMPAuthenticationPassword", "SomeAuthPass"); 
            //$this->RegisterPropertyString("SNMPPrivacyProtocol", "DES"); 
            //$this->RegisterPropertyString("SNMPPrivacyPassword", "SomePrivPass"); 

            //$this->RegisterPropertyString("SNMPEngineID", "0"); 
            //$this->RegisterPropertyString("SNMPContextName", ""); 
            //$this->RegisterPropertyString("SNMPContextEngine", "0");

            //{ "type": "NumberSpinner", "name": "SNMPEngineID", "caption": "Engine ID", "hex": true},
            //{ "type": "ValidationTextBox", "name": "SNMPContextName", "caption": "Context Name" },
            //{ "type": "NumberSpinner", "name": "SNMPContextEngine", "caption": "Context Engine", "hex": true},
        }

        public function ApplyChanges() {
            // Diese Zeile nicht löschen
            parent::ApplyChanges();
            $this->RequireParent("{1A75660D-48AE-4B89-B351-957CAEBEF22D}");
        }

        public function Test() {
            // Selbsterstellter Code
        }
    }
?>