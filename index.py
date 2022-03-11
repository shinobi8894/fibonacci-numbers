def fibonacci(n, second_last, last):
    if n-1 == 0:
        return second_last
    else:
        new_last = second_last + last
        second_last = last
        return fibonacci(n-1, second_last, new_last)
 
 
if __name__ == "__main__":
    print(fibonacci(10, 0, 1))