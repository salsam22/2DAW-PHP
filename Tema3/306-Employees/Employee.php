<?php

class Employee
{
    private string $name;
    private string $lastName;
    private float $salary;
    private array $arrayPhones = [];
    const MAX_SALARY = 3333;

    /**
     * Employee constructor.
     * @param string $name
     * @param string $lastName
     * @param float $salary
     */

    public function __construct(string $name, string $lastName, float $salary)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        if ($salary == null) {
            $this->salary = 1000;
        } else {
            if ($this->mustPayTaxes() == false) {
                echo "no taxes";
            }
            $this->salary = $salary;
            echo "si taxes";
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @param float $salary
     */
    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    /**
     * @param array $arrayPhones
     */
    public function setArrayPhones(array $arrayPhones): void
    {
        $this->arrayPhones = $arrayPhones;
    }

    /**
     * @return array
     */
    public function getArrayPhones(): array
    {
        return $this->arrayPhones;
    }

    public function getFullName(): string
    {

        return $this->getName() . " " . $this->getLastName();
    }

    public function mustPayTaxes(): bool
    {
        if ($this->salary->getSalary() <= self::MAX_SALARY) {
            return false;
        }
        return true;
    }

    public function addPhone(string $phone): void
    {
        $this->arrayPhones[] = $phone;
    }

    public function listPhones(): string
    {
        $phones = implode(",", $this->arrayPhones);
        return $phones;
    }

    public function emptyPhones(): void
    {
        unset($this->arrayPhones);
    }

    public static function toHtml(Employee $emp): string
    {
        $cad = "<p>{$emp->getArrayPhones()}</p>";

        $cad .= "<ol>";
        foreach ($emp->getArrayPhones() as $phone) {
            //$cad . $phone
        }






        return "<p>" . $emp->getFullName() . " - " . $emp->listPhones() . " - " . $emp->getSalary() . "</p>";
    }
}