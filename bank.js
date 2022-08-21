class BankAccount {
  constructor(balance) {
    if (!balance) {
      this.balance = 0;
    } else {
      this.balance = balance;
    }
  }

  CurrentBal() {
    return this.balance;
  }

  
}

class SavingAccount extends BankAccount {
  constructor(balance, interest) {
    super(balance);
    this.iniBal = balance;
    this.interest = interest;
  }
 

  Deposit() {
    return "Diposit not available";
  }
  Withdraw() {
    return "Withdraw not available";
  }
}

class CurrentAccount extends BankAccount {
  constructor(balance) {
    super(balance);
  }
  Deposit(balance) {
    this.balance += balance;
    return `Deposit Balance is: ${balance} and Total balance is: ${this.balance}`;
  }
  Withdraw(balance) {
    this.balance -= balance;
    return `Withdraw Balance is: ${balance} and Total balance is: ${this.balance}`;
  }
}
let account = new BankAccount();



console.log(account);
