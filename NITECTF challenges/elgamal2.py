def genkey(k):

    p = getPrime(k)

g = random.randrange (2, p)
x = random.randrange (1, p-1)
    h = pow(g, x, p)

    pk = (p, g, h)

sk = (p, x)
    return (pk, sk)

def encrypt(pk, m, r = None):

    (p, g, h) = pk

    if r is None:

r = random.randrange (1, p-1)
    c1 = pow(g, r, p)

    c2 = (m * pow(h, r, p)) % p

    return (c1, c2)
