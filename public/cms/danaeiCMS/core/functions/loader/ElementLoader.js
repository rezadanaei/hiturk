

export class ElementLoader {
  constructor() {
    this.elements = [];
  }

  // بارگذاری المنت‌ها از یک مسیر مشخص (به عنوان مثال مسیر templates/default/elements.json)
  async loadFromPath(path) {
    try {
      const response = await fetch(path);
      if (!response.ok) throw new Error(`Failed to load elements from ${path}`);
      const data = await response.json();
      this.elements.push(...data.elements || []); // فرض می‌کنیم فایل JSON شامل آرایه elements هست
    } catch (error) {
      console.error(error);
    }
  }

  // بارگذاری از چند مسیر مختلف، می‌توانی مسیرهای موردنظر را اینجا اضافه کنی
  async loadAll() {
    this.elements = []; // پاک کردن آرایه قبل از بارگذاری مجدد
    const paths = [
      '/templates/*/elements.json',
      '/components/*/elements.json',
      '/plugins/*/elements.json',
    ];

    for (const path of paths) {
      await this.loadFromPath(path);
    }
  }

  getAllElements() {
    return this.elements;
  }
}
