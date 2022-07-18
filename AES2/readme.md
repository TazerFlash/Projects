This challenge consists of two arrays, where one of them is the add_round_key step of the AES algorithm, which is to be xor'd with the 4x4 matrix to be encrypted.

We first start by xor'ing each element of the original matriix with the elements of the add_round_key matrix. 
Later, we convert the matrix into a 1d array and print the string.

The python code implmentation for the same is present in the directory under the name: "aes2.py"
