import time


def product(*args, repeat=1):
    # product('ABCD', 'xy') --> Ax Ay Bx By Cx Cy Dx Dy
    # product(range(2), repeat=3) --> 000 001 010 011 100 101 110 111
    pools = [tuple(pool) for pool in args] * repeat
    result = [[]]
    for pool in pools:
        result = [x + [y] for x in result for y in pool]
    for prod in result:
        yield tuple(prod)

def islice(iterable, *args):
    # islice('ABCDEFG', 2) --> A B
    # islice('ABCDEFG', 2, 4) --> C D
    # islice('ABCDEFG', 2, None) --> C D E F G
    # islice('ABCDEFG', 0, None, 2) --> A C E G
    s = slice(*args)
    start, stop, step = s.start or 0, s.stop or sys.maxsize, s.step or 1
    it = iter(range(start, stop, step))
    try:
        nexti = next(it)
    except StopIteration:
        # Consume *iterable* up to the *start* position.
        for i, element in zip(range(start), iterable):
            pass
        return
    try:
        for i, element in enumerate(iterable):
            if i == nexti:
                yield element
                nexti = next(it)
    except StopIteration:
        # Consume to *stop*.
        for i, element in zip(range(i + 1, stop), iterable):
            pass

def expr(p):
    return "{}1{}2{}3{}4{}5{}6{}7{}8{}9".format(*p)


def gen_expr():
    op = ['+', '-', '']
    return [expr(p) for p in product(op, repeat=9) if p[0] != '+']


def all_exprs():
    values = {}
    for expr in gen_expr():
        val = eval(expr)
        if val not in values:
            values[val] = 1
        else:
            values[val] += 1
    return values


def sum_to(val):
    for s in filter(lambda x: x[0] == val, map(lambda x: (eval(x), x), gen_expr())):
        time.sleep(1)
        print(s)


def max_solve():
    print("Sum {} has the maximum number of solutions: {}".
          format(*max(all_exprs().items(), key=lambda x: x[1])))


def min_solve():
    values = all_exprs()
    for i in range(123456789):
        if i not in values:
            print("Lowest positive sum that can't be expressed: {}".format(i))


def highest_sums(n=10):
    sums = map(lambda x: x[0],
               islice(sorted(all_exprs().items(), key=lambda x: x[0], reverse=True), n))
    print(''.format(list(sums)))


sum_to(100)
max_solve()
min_solve()
highest_sums()