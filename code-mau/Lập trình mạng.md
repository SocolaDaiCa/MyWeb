socket là giao diện lập trình để giao tiếp giữa hệ thóng và người dùng

Network Stream
trong System.io
```C#
Socket server = new Socket(AddressFamily.InterNetwork, SocketType.Stream, ProtocolType.Tcp);
```

Socket server = new Socket(AddressFamily.InterNetwork, SocketType.Stream, ProtocolType.Tcp);
NetworkStream ns = new NetworkStream(server);