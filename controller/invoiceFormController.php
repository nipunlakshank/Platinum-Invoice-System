<?php

class Invoice
{
    public string $id;
    public $settledByCheques = [];

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function addSettledCheque(Cheque $cheque): void
    {
        $this->settledByCheques[] = $cheque;
    }
}

class Cheque
{
    public int $id;
    public float $balance;
    public $settlesInvoices = [];

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function addInvoice(Invoice $invoice)
    {
        $this->settlesInvoices[] = $invoice;
        $invoice->addSettledCheque($this);
    }

    public function getBalance()
    {
        // Calculate the remaining balance based on the cheque's amount and settled invoices
        $totalSettledAmount = 0;
        foreach ($this->settlesInvoices as $invoice) {
            $totalSettledAmount += $this->getInvoiceAmount($invoice);
        }
        return $this->getChequeAmount() - $totalSettledAmount;
    }

    private function getChequeAmount()
    {
        // Return the cheque amount
        // Replace this with your actual cheque amount logic
        // For simplicity, let's assume the cheque amount is fixed at 1000
        return 1000;
    }

    private function getInvoiceAmount(Invoice $invoice)
    {
        // Return the invoice amount
        // Replace this with your actual invoice amount logic
        // For simplicity, let's assume the invoice amount is fixed at 200
        return 200;
    }
}

$req = json_decode(file_get_contents('php://input'));

$customerId = $req->customerId;
$invoiceNumbers = explode(",", $req->invoiceNumbers);
$chequeNumbers = explode(",", $req->chequeNumbers);

$res = new stdClass();
$res->customerId = $customerId;
$res->invoiceNumbers = $invoiceNumbers;
$res->chequeNumbers = $chequeNumbers;

exit(json_encode($res));

// Create invoices and cheques
$invoices = [];

foreach ($invoiceNumbers as $invoiceNumber) {
    $invoices[] = new Invoice($invoiceNumber);
}

$cheques = [];

foreach($chequeNumbers as $chequeNumber){
    $cheques[] = new Cheque($chequeNumber);
}


foreach($invoices as $invoice){
    
}


// Generate Customer Receipt
function generateCustomerReceipt($invoices)
{
    echo "Customer Receipt\n";
    echo "Invoices settled:\n";
    foreach ($invoices as $invoice) {
        echo $invoice->id . "\n";
    }
}

// Generate Cheque Balance Report
function generateChequeBalanceReport($cheques)
{
    echo "Cheque Balance Report:\n";
    foreach ($cheques as $cheque) {
        echo "Cheque id: " . $cheque->id . "\n";
        echo "Balance: " . $cheque->getBalance() . "\n";
    }
}

// Usage example
generateCustomerReceipt($invoices);
echo "\n";
generateChequeBalanceReport($cheques);
